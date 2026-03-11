<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        $lead = ContactLead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        Mail::send('emails.contact-lead', ['lead' => $lead], function ($mail) use ($lead) {
            $mail->to('sales@juicebrand.com')
                 ->subject('New Contact Lead - ' . $lead->name);
        });

        return back()->with('success', 'Thank you! Our team will contact you within 24 hours.');
    }

    public function adminIndex()
    {
        $leads = ContactLead::latest()->get();
        return view('admin.contact-leads.index', compact('leads'));
    }

    public function destroy($id)
    {
        ContactLead::findOrFail($id)->delete();
        return back()->with('success', 'Lead deleted successfully!');
    }
}
