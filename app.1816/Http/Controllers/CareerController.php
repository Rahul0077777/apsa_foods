<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerOpening;
use App\Models\CareerApplication;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        return "Application Submitted";
    }
    public function index()
    {
        $jobs = CareerOpening::latest()->get();
        return view('careers', compact('jobs'));
    }
    public function apply(Request $request)
    {
        $file = $request->file('resume')->store('resumes', 'public');

        CareerApplication::create([
            'career_opening_id' => $request->career_opening_id,
            'name' => $request->name,
            'email' => $request->email,
            'portfolio' => $request->portfolio,
            'resume' => $file,
        ]);

        return back()->with('success', 'Application submitted successfully!');
    }
}
