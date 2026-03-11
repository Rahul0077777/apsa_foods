<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.categories.index',compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'status'=>$request->status
        ]);
        return redirect()->route('categories.index');
    }

    public function edit(Category $category){
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category){
        $category->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'status'=>$request->status
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category){
        $category->delete();
        return back();
    }
}
