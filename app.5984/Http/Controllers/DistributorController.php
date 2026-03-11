<?php

namespace App\Http\Controllers;
use App\Models\DistributorPackage;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index()
    {
        $packages = DistributorPackage::where('status',1)->get();

        return view('frontend.distributor', compact('packages'));
    }
}
