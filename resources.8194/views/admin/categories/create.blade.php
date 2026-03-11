@extends('layouts.admin')
@section('title','Add Category')

@section('content')
<form action="{{ route('categories.store') }}" method="POST">
@csrf
<div class="bg-white p-6 rounded shadow max-w-xl">
    <h2 class="text-xl font-bold mb-4">Add Category</h2>

    <label>Name</label>
    <input name="name" class="w-full border p-2 mb-3" required>

    <label>Status</label>
    <select name="status" class="w-full border p-2 mb-4">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>

    <button class="bg-primary px-4 py-2 rounded">Save</button>
</div>
</form>
@endsection
