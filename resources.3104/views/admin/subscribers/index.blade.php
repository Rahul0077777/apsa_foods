@extends('layouts.admin')

@section('title', 'Subscribers')

@section('content')

<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Newsletter Subscribers</h2>

    <table class="w-full border rounded-lg overflow-hidden" id="subsTable">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">#</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Subscribed At</th>
            <th class="p-3 text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subscribers as $key => $sub)
        <tr class="border-t">
            <td class="p-3">{{ $key + 1 }}</td>
            <td class="p-3 email">{{ $sub->email }}</td>
            <td class="p-3">{{ $sub->created_at->format('d M Y, h:i A') }}</td>
            <td class="p-3 text-center">
                <form action="{{ route('admin.subscribers.delete', $sub->id) }}" method="POST"
                      onsubmit="return confirm('Delete this subscriber?')">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

@endsection
