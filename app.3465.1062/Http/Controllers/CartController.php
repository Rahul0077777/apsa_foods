<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // public function add($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $cart = session()->get('cart', []);

    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "price" => $product->price,
    //             "image" => $product->image,
    //             "quantity" => 1
    //         ];
    //     }

    //     session()->put('cart', $cart);
    //     return back();
    // }

    public function add(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $quantity = $request->quantity ?? 1;

        $cart = session()->get('cart', []);

        // If product already exists
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity'] += $quantity;
        }
        else
        {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart');

    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Product removed!');
    }

    public function increase($id)
    {
        $cart = session()->get('cart');
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return back();
    }

    public function decrease($id)
    {
        $cart = session()->get('cart');

        if ($cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        } else {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);
        return back();
    }

}
