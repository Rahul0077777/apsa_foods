<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\DistributorPackage;
use App\Models\ProductVariant;
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

    // public function add(Request $request, $id)
    // {

    //     $product = Product::findOrFail($id);

    //     $quantity = $request->quantity ?? 1;

    //     $cart = session()->get('cart', []);

    //     // If product already exists
    //     if(isset($cart[$id]))
    //     {
    //         $cart[$id]['quantity'] += $quantity;
    //     }
    //     else
    //     {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "quantity" => $quantity,
    //             "price" => $product->price,
    //             "image" => $product->image
    //         ];
    //     }

    //     session()->put('cart', $cart);

    //     return redirect()->back()->with('success', 'Product added to cart');

    // }

    public function add(Request $request, $id)
    {
        $product = Product::with('variants')->findOrFail($id);

        $variant = ProductVariant::find($request->variant_id);

        if(!$variant){
            $variant = $product->variants()->first();
        }

        if(!$variant){
            return back()->with('error','No variant available');
        }

        $quantity = $request->quantity ?? 1;

        $cart = session()->get('cart', []);

        $cartKey = $id . '_' . $variant->id;

        if(isset($cart[$cartKey])){
            $cart[$cartKey]['quantity'] += $quantity;
        } else {
            $cart[$cartKey] = [
                "product_id" => $product->id,
                "variant_id" => $variant->id,
                "name" => $product->name,
                "volume" => $variant->volume,
                "price" => $variant->price,
                "image" => $product->image,
                "quantity" => $quantity
            ];
        }

        session()->put('cart', $cart);

        if($request->buy_now){
            return redirect()->route('cart.index');
        }

        return back()->with('success','Product added to cart');
    }

    public function remove($key)
    {
        $cart = session()->get('cart');

        if(isset($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Product removed!');
    }

    public function increase($key)
    {
        $cart = session()->get('cart');

        if(isset($cart[$key])) {
            $cart[$key]['quantity']++;
            session()->put('cart', $cart);
        }

        return back();
    }

    public function decrease($key)
    {
        $cart = session()->get('cart');

        if(isset($cart[$key])) {

            if($cart[$key]['quantity'] > 1) {
                $cart[$key]['quantity']--;
            } else {
                unset($cart[$key]);
            }

            session()->put('cart', $cart);
        }

        return back();
    }

    public function addPackage($id)
    {
        $package = DistributorPackage::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart['package_'.$id]))
        {
            $cart['package_'.$id]['quantity']++;
        }
        else
        {
            $cart['package_'.$id] = [
                "id" => $package->id,
                "name" => $package->title,
                "price" => $package->price,
                "image" => $package->image,
                "quantity" => 1,
                "type" => "package"
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success','Distributor package added to cart');
    }

}
