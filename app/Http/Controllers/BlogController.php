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
        $blogs = Blog::latest()->paginate(6);

        return view('blog', compact('blogs'));
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
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required',
        ]);

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

    // ADMIN EDIT FORM
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    // ADMIN UPDATE
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'featured' => $request->featured ?? 0,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs','public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs')->with('success', 'Blog Updated Successfully');
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog-show', compact('blog'));
    }
}
