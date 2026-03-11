<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('variants')
            ->where('status', 1)
            ->latest()
            ->get();

        return view('home', compact('products'));
    }
}