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
    public function index(Request $request)
    {
        $departments = CareerOpening::select('department')->distinct()->pluck('department');

        $jobs = CareerOpening::when($request->department, function ($q) use ($request) {
            $q->where('department', $request->department);
        })->latest()->get();

        return view('careers', compact('jobs', 'departments'));
    }
    public function apply(Request $request)
    {
        $request->validate([
            'career_opening_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'resume' => 'required|mimes:pdf,doc,docx'
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        CareerApplication::create([
            'career_opening_id' => $request->career_opening_id,
            'name' => $request->name,
            'email' => $request->email,
            'portfolio' => $request->portfolio,
            'resume' => $resumePath,
        ]);

        return back()->with('success', 'Application submitted successfully!');
    }

    public function adminIndex()
    {
        $jobs = CareerOpening::latest()->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function storeJob(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'department' => 'required',
            'description' => 'required',
            'requirements' => 'required',
        ]);

        CareerOpening::create($request->all());

        return redirect()->route('admin.jobs')->with('success', 'Job added successfully!');
    }

    public function edit($id)
    {
        $job = CareerOpening::findOrFail($id);
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $job = CareerOpening::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'department' => 'required',
            'description' => 'required',
            'requirements' => 'required',
        ]);

        $job->update($request->all());

        return redirect()->route('admin.jobs')->with('success', 'Job updated successfully!');
    }

    public function destroy($id)
    {
        CareerOpening::findOrFail($id)->delete();
        return back()->with('success', 'Job deleted successfully!');
    }



}
