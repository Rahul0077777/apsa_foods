<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function toggle(Product $product)
    {
       $user = auth()->user();

        if ($user->wishlist()->where('product_id', $product->id)->exists()) {
            $user->wishlist()->detach($product->id);
            return response()->json(['status' => 'removed']);
        } else {
            $user->wishlist()->attach($product->id);
            return response()->json(['status' => 'added']);
        }
    }

    public function index()
    {
        $user = auth()->user();

        $products = $user->wishlist()->latest()->get();

        return view('wishlist', compact('products'));
    }

}
