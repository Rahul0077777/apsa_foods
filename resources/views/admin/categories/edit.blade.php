@extends('layouts.admin')
@section('title','Edit Category')

@section('content')
<form action="{{ route('categories.update',$category->id) }}" method="POST">
@csrf @method('PUT')
<div class="bg-white p-6 rounded shadow max-w-xl">
    <h2 class="text-xl font-bold mb-4">Edit Category</h2>

    <label>Name</label>
    <input name="name" value="{{ $category->name }}" class="w-full border p-2 mb-3" required>

    <label>Status</label>
    <select name="status" class="w-full border p-2 mb-4">
        <option value="1" {{ $category->status?'selected':'' }}>Active</option>
        <option value="0" {{ !$category->status?'selected':'' }}>Inactive</option>
    </select>

    <button class="bg-primary px-4 py-2 rounded">Update</button>
</div>
</form>
@endsection
