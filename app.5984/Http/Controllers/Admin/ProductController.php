<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        // $products = \App\Models\Product::latest()->get();
        // return view('admin.products.index', compact('products'));
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

   public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category = $request->category;
        $product->status = $request->status ? 1 : 0;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();

        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category = $request->category;
        $product->status = $request->status ? 1 : 0;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted');
    }

    private function generateUniqueSlug($name)
    {
        $slug = \Str::slug($name);
        $count = Product::where('slug', 'LIKE', "{$slug}%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
