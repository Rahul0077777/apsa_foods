@extends('layouts.admin')
@section('title','Categories')

@section('content')

<div class="bg-white p-6 rounded shadow">

    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-bold">Categories</h2>
        <a href="{{ route('categories.create') }}" class="bg-primary px-4 py-2 rounded font-semibold">+ Add Category</a>
    </div>

    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2">Name</th>
                <th class="p-2">Slug</th>
                <th class="p-2">Status</th>
                <th class="p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr class="border-t">
                <td class="p-2">{{ $cat->name }}</td>
                <td class="p-2">{{ $cat->slug }}</td>
                <td class="p-2">
                    <span class="px-2 py-1 text-xs rounded {{ $cat->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        {{ $cat->status ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="p-2 flex gap-2">
                    <a href="{{ route('categories.edit',$cat->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('categories.destroy',$cat->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Delete?')" class="text-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
