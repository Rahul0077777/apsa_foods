@extends('layouts.admin')

@section('title','Add Blog')

@section('content')

<div class="max-w-5xl mx-auto bg-white dark:bg-zinc-900 p-8 rounded-xl shadow">

    <h2 class="text-2xl font-bold mb-6">Create New Blog</h2>

    <form method="POST"
          action="{{ route('admin.blogs.store') }}"
          enctype="multipart/form-data"
          class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

        <!-- Title -->
        <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Title</label>
            <input type="text" name="title" required
                   class="w-full border rounded-lg px-4 py-2 focus:ring-primary focus:border-primary">
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-semibold mb-1">Category</label>
            <input type="text" name="category" required
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <!-- Image -->
        <div>
            <label class="block text-sm font-semibold mb-1">Blog Image</label>
            <input type="file" name="image" required
                   class="w-full border rounded-lg px-3 py-2 bg-white">
        </div>

        <!-- Excerpt -->
        <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Short Description (Excerpt)</label>
            <textarea name="excerpt" rows="3"
                      class="w-full border rounded-lg px-4 py-2"></textarea>
        </div>

        <!-- Content -->
        <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Full Blog Content</label>
            <textarea name="content" rows="8"
                      class="w-full border rounded-lg px-4 py-2"></textarea>
        </div>

        <!-- Featured -->
        <div class="flex items-center gap-2">
            <input type="checkbox" name="featured" value="1"
                   class="w-4 h-4">
            <label class="text-sm font-semibold">Mark as Featured</label>
        </div>

        <!-- Submit -->
        <div class="md:col-span-2">
            <button type="submit"
                    class="bg-primary px-6 py-3 rounded-lg font-bold text-black hover:opacity-90">
                Publish Blog
            </button>
        </div>

    </form>

</div>

@endsection
