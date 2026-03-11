<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DistributorPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DistributorPackageController extends Controller
{

    public function index()
    {
        $packages = DistributorPackage::latest()->get();

        return view('admin.distributor.index', compact('packages'));
    }


    public function create()
    {
        return view('admin.distributor.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'price' => 'nullable|numeric',
            'button_text' => 'required',
            'image' => 'required|image'
        ]);


        $imagePath = null;

        if($request->hasFile('image'))
        {
            $imagePath = $request->file('image')
                ->store('distributor','public');
        }


        DistributorPackage::create([

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'type' => $request->type,

            'price' => $request->price,

            'button_text' => $request->button_text,

            'features' => explode("\n", $request->features),

            'image' => $imagePath,

            'status' => $request->status
        ]);


        return redirect()
            ->route('admin.distributor.index')
            ->with('success','Package Added Successfully');

    }


    public function edit($id)
    {
        $package = DistributorPackage::findOrFail($id);

        return view('admin.distributor.edit', compact('package'));
    }


    public function update(Request $request, $id)
    {
        $package = DistributorPackage::findOrFail($id);

        $imagePath = $package->image;

        if($request->hasFile('image'))
        {
            $imagePath = $request->file('image')
                ->store('distributor','public');
        }


        $package->update([

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'type' => $request->type,

            'price' => $request->price,

            'button_text' => $request->button_text,

            'features' => explode("\n", $request->features),

            'image' => $imagePath,

            'status' => $request->status
        ]);


        return redirect()
            ->route('admin.distributor.index')
            ->with('success','Updated Successfully');
    }


    public function destroy($id)
    {
        DistributorPackage::destroy($id);

        return back()->with('success','Deleted Successfully');
    }

}