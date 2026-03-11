@extends('layouts.admin')

@section('title', 'Partnership Requests')

@section('content')

<div class="bg-white rounded-xl border shadow-sm overflow-hidden">
    <div class="flex justify-between items-center px-6 py-4 border-b">
        <div>
            <h3 class="font-bold text-lg">All Partnership Requests</h3>
            <p class="text-sm text-gray-500">{{ $partnerships->total() }} total requests</p>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">Business Name</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Mobile</th>
                    <th class="px-6 py-3 text-left">City / State</th>
                    <th class="px-6 py-3 text-left">Partnership Type</th>
                    <th class="px-6 py-3 text-left">Message</th>
                    <th class="px-6 py-3 text-left">Date</th>
                    <th class="px-6 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($partnerships as $p)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-3 font-semibold">{{ $loop->iteration + ($partnerships->currentPage() - 1) * $partnerships->perPage() }}</td>
                    <td class="px-6 py-3 font-semibold">{{ $p->business_name }}</td>
                    <td class="px-6 py-3">
                        <a href="mailto:{{ $p->email }}" class="text-green-600 hover:underline">{{ $p->email }}</a>
                    </td>
                    <td class="px-6 py-3">
                        <a href="tel:{{ $p->mobile }}" class="hover:underline">{{ $p->mobile }}</a>
                    </td>
                    <td class="px-6 py-3">{{ $p->city_state }}</td>
                    <td class="px-6 py-3">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                            {{ $p->partnership_type }}
                        </span>
                    </td>
                    <td class="px-6 py-3 max-w-[200px] truncate text-gray-500" title="{{ $p->message }}">
                        {{ $p->message ?? '—' }}
                    </td>
                    <td class="px-6 py-3 text-gray-500 whitespace-nowrap">{{ $p->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-3">
                        <form action="{{ route('admin.partnership.destroy', $p->id) }}" method="POST"
                              onsubmit="return confirm('Delete this request?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-500 hover:text-red-700 text-xs font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">delete</span> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="px-6 py-8 text-center text-gray-400">
                        No partnership requests yet.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($partnerships->hasPages())
    <div class="px-6 py-4 border-t">
        {{ $partnerships->links() }}
    </div>
    @endif
</div>

@endsection
