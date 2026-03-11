<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistributorPackage;
class DistributorOrderController extends Controller
{
    public function create($slug)
    {
        $package = DistributorPackage::where('slug',$slug)
                    ->where('status',1)
                    ->firstOrFail();

        return view('frontend.distributor-order', compact('package'));
    }



    public function store(Request $request)
    {
        DistributorOrder::create([

            'package_id' => $request->package_id,

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'notes' => $request->notes

        ]);

        return redirect()->back()->with('success','Request submitted');
    }
}
