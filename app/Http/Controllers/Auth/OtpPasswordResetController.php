<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class OtpPasswordResetController extends Controller
{
    public function showVerifyForm()
    {
        $email = session('reset_email');
        if (!$email) {
            return redirect()->route('password.request')->withErrors(['email' => 'Please enter your email to request an OTP first.']);
        }
        return view('auth.verify-otp', ['email' => $email]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'otp' => ['required', 'string', 'size:6']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->reset_otp !== $request->otp) {
            return back()->withInput()->withErrors(['otp' => 'Invalid OTP. Please check and try again.']);
        }

        if (Carbon::now()->gt($user->reset_otp_expires_at)) {
            return back()->withInput()->withErrors(['otp' => 'This OTP has expired. Please request a new one.']);
        }

        // OTP is valid. Store a secure flag in session to allow password reset
        session(['verified_email' => $user->email]);
        session()->forget('reset_email');
        
        return redirect()->route('password.reset.form');
    }

    public function showResetForm()
    {
        if (!session('verified_email')) {
            return redirect()->route('password.request')->withErrors(['email' => 'Please verify your identity first.']);
        }
        
        return view('auth.reset-password-custom');
    }

    public function storeNewPassword(Request $request)
    {
        if (!session('verified_email')) {
            return redirect()->route('password.request');
        }

        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::where('email', session('verified_email'))->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->reset_otp = null;
            $user->reset_otp_expires_at = null;
            $user->save();
        }

        session()->forget('verified_email');

        return redirect()->route('login')->with('status', 'Your password has been successfully reset.');
    }
}
