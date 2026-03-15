
@extends('layouts.admin')

@section('title', 'Blogs')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">All Blogs</h2>

        <a href="{{ route('admin.blogs.create') }}"
           class="bg-primary px-4 py-2 rounded text-black font-semibold">
           + Add Blog
        </a>
    </div>

    <table class="w-full border rounded-lg overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">#</th>
                <th class="p-3">Image</th>
                <th class="p-3">Title</th>
                <th class="p-3">Category</th>
                <th class="p-3">Featured</th>
                <th class="p-3">Date</th>
                <th class="p-3 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $key => $blog)
            <tr class="border-t">
                <td class="p-3">{{ $key+1 }}</td>
                <td class="p-3">
                    <img src="{{ asset('storage/'.$blog->image) }}" class="w-16 h-12 object-cover rounded">
                </td>
                <td class="p-3">{{ $blog->title }}</td>
                <td class="p-3">{{ $blog->category }}</td>
                <td class="p-3">
                    @if($blog->featured)
                        <span class="text-green-600 font-bold">Yes</span>
                    @else
                        No
                    @endif
                </td>
                <td class="p-3">{{ $blog->created_at->format('d M Y') }}</td>
                <td class="p-3 text-right">
                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold px-2 py-1 border border-blue-600 rounded">
                        Edit
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="p-4 text-center text-gray-500">
                    No blogs added yet.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
