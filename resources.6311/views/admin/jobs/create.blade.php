@extends('layouts.admin')

@section('content')

<div class="p-6 max-w-2xl">
    <h2 class="text-2xl font-bold mb-4">Add New Job</h2>

    <form action="{{ route('admin.jobs.store') }}" method="POST" class="flex flex-col gap-4">
        @csrf

        <input name="title" placeholder="Job Title" class="border p-2 rounded" required>
        <input name="location" placeholder="Location" class="border p-2 rounded" required>
        <input name="department" placeholder="Department" class="border p-2 rounded" required>

        <textarea name="description" placeholder="Job Description" class="border p-2 rounded" required></textarea>

        <textarea name="requirements" placeholder="Requirements (comma separated)" class="border p-2 rounded" required></textarea>

        <button class="bg-green-600 text-white p-3 rounded">Save Job</button>
    </form>
</div>

@endsection
