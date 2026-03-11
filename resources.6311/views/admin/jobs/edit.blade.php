@extends('layouts.admin')

@section('content')

<div class="p-6 max-w-2xl">
    <h2 class="text-2xl font-bold mb-4">Edit Job</h2>

    <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" class="flex flex-col gap-4">
        @csrf
        @method('PUT')

        <input name="title" value="{{ $job->title }}" class="border p-2 rounded" required>
        <input name="location" value="{{ $job->location }}" class="border p-2 rounded" required>
        <input name="department" value="{{ $job->department }}" class="border p-2 rounded" required>

        <textarea name="description" class="border p-2 rounded" required>{{ $job->description }}</textarea>

        <textarea name="requirements" class="border p-2 rounded" required>{{ $job->requirements }}</textarea>

        <button class="bg-green-600 text-white p-3 rounded">Update Job</button>
    </form>
</div>

@endsection
