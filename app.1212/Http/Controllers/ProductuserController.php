<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductuserController extends Controller
{

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
                        ->where('status', 1)
                        ->firstOrFail();

        // Related products (same category later, abhi random)
        $related = Product::where('id', '!=', $product->id)
                        ->where('status', 1)
                        ->latest()
                        ->take(4)
                        ->get();

        return view('product-detail', compact('product', 'related'));
    }
}
