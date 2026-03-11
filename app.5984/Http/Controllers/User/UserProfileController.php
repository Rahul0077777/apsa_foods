<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = auth()->user();

        // delete old image (optional but good)
        if ($user->profile_image && Storage::disk('public')->exists($user->profile_image)) {
            Storage::disk('public')->delete($user->profile_image);
        }

        // store new image
        $path = $request->file('profile_image')->store('profiles', 'public');

        // UPDATE DB (this was missing in your case)
        $user->update([
            'profile_image' => $path
        ]);

        return back()->with('success', 'Photo updated');
    }
}