<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // FRONTEND BLOG PAGE
    public function blogList()
    {
        $featured = Blog::where('featured',1)->latest()->first();

        $blogs = Blog::where('featured',0)
                    ->latest()
                    ->paginate(6);   // ✅ paginate

        return view('blog', compact('blogs','featured'));
    }

    // ADMIN LIST
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    // ADMIN CREATE FORM
    public function create()
    {
        return view('admin.blogs.create');
    }

    // ADMIN STORE
    public function store(Request $request)
    {
        $img = $request->file('image')->store('blogs','public');

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'image' => $img,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'featured' => $request->featured ?? 0,
        ]);

        return back()->with('success','Blog Added Successfully');
    }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog-show', compact('blog'));
    }
}
