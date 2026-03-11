<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\DistributorPackage;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::where('status', 1);

        // Category Filter
        if ($request->filled('category')) {
            $query->whereIn('category_id', $request->category);
        }

        // Price Range Filter
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Sorting
        if ($request->sort == 'low_high') {
            $query->orderBy('price', 'asc');
        } elseif ($request->sort == 'high_low') {
            $query->orderBy('price', 'desc');
        } else {
            $query->latest();
        }

        $products   = $query->paginate(9)->withQueryString();
        $categories = Category::where('status', 1)->get();

         $packages = DistributorPackage::where('status',1)->get();

        return view('shop', compact('products', 'categories', 'packages'));
    }

}
