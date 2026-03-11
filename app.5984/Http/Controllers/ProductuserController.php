<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\DistributorPackage;
class ProductuserController extends Controller
{

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 1)
            ->first();

        if ($product) {

            $related = Product::where('id', '!=', $product->id)
                ->where('status', 1)
                ->latest()
                ->take(4)
                ->get();

            return view('product-detail', [
                'item' => $product,
                'type' => 'product',
                'related' => $related
            ]);
        }

        $package = DistributorPackage::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $related = Product::where('status', 1)
            ->latest()
            ->take(4)
            ->get();

        return view('product-detail', [
            'item' => $package,
            'type' => 'package',
            'related' => $related
        ]);
    }
}
