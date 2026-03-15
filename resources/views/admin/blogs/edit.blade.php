@extends('layouts.admin')

@section('title','Edit Blog')

@section('content')

<div class="max-w-5xl mx-auto bg-white dark:bg-zinc-900 p-8 rounded-xl shadow">

    <h2 class="text-2xl font-bold mb-6">Edit Blog</h2>

    <form method="POST"
          action="{{ route('admin.blogs.update', $blog->id) }}"
          enctype="multipart/form-data"
          class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Title</label>
            <input type="text" name="title" value="{{ old('title', $blog->title) }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-primary focus:border-primary @error('title') border-red-500 @enderror">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-semibold mb-1">Category</label>
            <input type="text" name="category" value="{{ old('category', $blog->category) }}"
                   class="w-full border rounded-lg px-4 py-2 @error('category') border-red-500 @enderror">
            @error('category')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image -->
        <div>
            <label class="block text-sm font-semibold mb-1">Blog Image (Leave empty to keep current)</label>
            <input type="file" name="image"
                   class="w-full border rounded-lg px-3 py-2 bg-white @error('image') border-red-500 @enderror">
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            @if($blog->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/'.$blog->image) }}" class="h-16 w-auto object-cover rounded shadow">
                </div>
            @endif
        </div>

        <!-- Excerpt -->
        <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Short Description (Excerpt)</label>
            <textarea name="excerpt" rows="3"
                      class="w-full border rounded-lg px-4 py-2 rich-text">{{ old('excerpt', $blog->excerpt) }}</textarea>
        </div>

        <!-- Content -->
        <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Full Blog Content</label>
            <textarea name="content" rows="8"
                      class="w-full border rounded-lg px-4 py-2 rich-text @error('content') border-red-500 @enderror">{{ old('content', $blog->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Featured -->
        <div class="flex items-center gap-2">
            <input type="checkbox" name="featured" value="1"
                   {{ $blog->featured ? 'checked' : '' }}
                   class="w-4 h-4">
            <label class="text-sm font-semibold">Mark as Featured</label>
        </div>

        <!-- Submit -->
        <div class="md:col-span-2">
            <button type="submit"
                    class="bg-primary px-6 py-3 rounded-lg font-bold text-black hover:opacity-90">
                Update Blog
            </button>
        </div>

    </form>

</div>

<!-- CKEditor for Rich Text -->
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.rich-text').forEach(function (textarea) {
            CKEDITOR.replace(textarea.name, {
                versionCheck: false,
                height: 200,
                toolbar: [
                    ['Styles', 'Format', 'Font', 'FontSize'],
                    ['Bold', 'Italic', 'Underline', 'Strike'],
                    ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'],
                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                    ['Link', 'Unlink'],
                    ['Undo', 'Redo']
                ]
            });
        });
    });
</script>

@endsection
