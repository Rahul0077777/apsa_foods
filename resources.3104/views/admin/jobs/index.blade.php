@extends('layouts.admin')

@section('content')

<div class="p-6">
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">All Jobs</h2>
        <a href="{{ route('admin.jobs.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">
            Add Job
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border">
    <tr class="bg-gray-100">
        <th class="p-2">Title</th>
        <th class="p-2">Location</th>
        <th class="p-2">Department</th>
        <th class="p-2 text-center">Action</th>
    </tr>

    @foreach($jobs as $job)
    <tr class="border-t">
        <td class="p-2">{{ $job->title }}</td>
        <td class="p-2">{{ $job->location }}</td>
        <td class="p-2">{{ $job->department }}</td>
        <td class="p-2 text-center flex gap-2 justify-center">

            <a href="{{ route('admin.jobs.edit', $job->id) }}"
               class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>

            <form action="{{ route('admin.jobs.delete', $job->id) }}" method="POST"
                  onsubmit="return confirm('Delete this job?')">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection
