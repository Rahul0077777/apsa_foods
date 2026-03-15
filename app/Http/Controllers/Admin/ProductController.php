<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\ProductVariant;

class ProductController extends Controller
{
    public function index()
    {
        // $products = \App\Models\Product::latest()->get();
        // return view('admin.products.index', compact('products'));
        $products = Product::with('variants')->latest()->paginate(10);
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
            'category_id' => 'required|exists:categories,id',
            'variants' => 'required|array|min:1',
            'variants.*.volume' => 'required',
            'variants.*.price' => 'required|numeric',
            'variants.*.stock' => 'required|integer',
            'variants.*.image' => 'nullable|image|mimes:jpg,png,jpeg',
        ], [
            'variants.required' => 'At least one product variant is required.',
            'variants.*.volume.required' => 'The volume field is required for all variants.',
            'variants.*.price.required' => 'The price field is required for all variants.',
            'variants.*.stock.required' => 'The stock field is required for all variants.',
            'variants.*.image.image' => 'The variant image must be an image file.',
        ]);

        // 🔥 Calculate from variants
        $lowestPrice = collect($request->variants)->min('price');
        $totalStock  = collect($request->variants)->sum('stock');

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->ingredients = $request->ingredients;
        $product->instructions = $request->instructions;
        $product->product_details = $request->product_details;
        $product->category_id = $request->category_id;
        $product->status = $request->status ? 1 : 0;

        // ✅ Set required DB fields
        $product->price = $lowestPrice;
        $product->stock = $totalStock;

        $product->save();

        // Save Variants
        foreach ($request->variants as $index => $variantData) {
            $variantImage = null;
            if ($request->hasFile("variants.$index.image")) {
                $variantImage = $request->file("variants.$index.image")->store('variants', 'public');
            }

            $variant = ProductVariant::create([
                'product_id' => $product->id,
                'volume' => $variantData['volume'],
                'price' => $variantData['price'],
                'stock' => $variantData['stock'],
                'image' => $variantImage,
            ]);

            // ✅ Sync first variant image to product main image if not set
            if ($index == 0 && $variant->image) {
                $product->image = $variant->image;
                $product->save();
            }
        }

        return redirect()
            ->route('products.index')
            ->with('success', 'Product added successfully with variants');
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
            'category_id' => 'required|exists:categories,id',
            'variants' => 'required|array|min:1',
            'variants.*.volume' => 'required',
            'variants.*.price' => 'required|numeric',
            'variants.*.stock' => 'required|integer',
            'variants.*.image' => 'nullable|image|mimes:jpg,png,jpeg',
        ], [
            'variants.required' => 'At least one product variant is required.',
            'variants.*.volume.required' => 'The volume field is required for all variants.',
            'variants.*.price.required' => 'The price field is required for all variants.',
            'variants.*.stock.required' => 'The stock field is required for all variants.',
            'variants.*.image.image' => 'The variant image must be an image file.',
        ]);

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->ingredients = $request->ingredients;
        $product->instructions = $request->instructions;
        $product->product_details = $request->product_details;
        $product->category_id = $request->category_id;
        $product->status = $request->status ? 1 : 0;

        $product->save();

        // 🗑️ Delete variants not in the request
        if ($request->has('variants')) {
            $incomingIds = collect($request->variants)->pluck('id')->filter()->toArray();
            $product->variants()->whereNotIn('id', $incomingIds)->delete();
        }

        // Update or Create Variants
        foreach ($request->variants as $index => $variantData) {

            $variant = isset($variantData['id']) ? ProductVariant::find($variantData['id']) : new ProductVariant();

            // Check for image removal
            if (isset($variantData['remove_image']) && $variantData['remove_image'] == 1) {
                $variant->image = null;
            }

            if ($request->hasFile("variants.$index.image")) {
                $variantImage = $request->file("variants.$index.image")->store('variants', 'public');
                $variant->image = $variantImage;
            }

            $variant->product_id = $product->id;
            $variant->volume = $variantData['volume'];
            $variant->price = $variantData['price'];
            $variant->stock = $variantData['stock'];
            $variant->save();
        }

        // ✅ Sync first variant image to product main image
        $firstVariant = $product->variants()->first();
        if ($firstVariant && $firstVariant->image) {
            $product->image = $firstVariant->image;
            $product->save();
        }

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
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
