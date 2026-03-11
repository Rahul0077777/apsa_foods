<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    
    public function store(Request $request)
    {
        $data = $request->validate([

            'business_name' => 'required|string|max:255',

            'mobile' => 'required|string|max:20',

            'email' => 'required|email|max:255',

            'city_state' => 'required|string|max:255',

            'partnership_type' => 'required|string|max:100',

            'message' => 'nullable|string',

        ]);

        Partnership::create($data);

        return back()->with('success', 'Application submitted successfully.');
    }

}
