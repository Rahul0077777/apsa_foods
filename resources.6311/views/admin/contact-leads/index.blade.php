@extends('layouts.admin')

@section('title', 'Contact Leads')

@section('content')

<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Contact Form Leads</h2>

    <table class="w-full border rounded-lg overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">#</th>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Phone</th>
                <th class="p-3">Message</th>
                <th class="p-3">Date</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $key => $lead)
            <tr class="border-t">
                <td class="p-3">{{ $key+1 }}</td>
                <td class="p-3">{{ $lead->name }}</td>
                <td class="p-3">{{ $lead->email }}</td>
                <td class="p-3">{{ $lead->phone }}</td>
                <td class="p-3">
                    <button
                        onclick="openModal(`{{ addslashes($lead->message) }}`)"
                        class="text-blue-600 underline">
                        View Message
                    </button>
                </td>
                <td class="p-3">{{ $lead->created_at->format('d M Y, h:i A') }}</td>
                <td class="p-3 text-center">
                    <form method="POST" action="{{ route('admin.contact.leads.delete', $lead->id) }}"
                          onsubmit="return confirm('Delete this lead?')">
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

<!-- Message Modal -->
<div id="msgModal"
     class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white w-[600px] max-h-[80vh] overflow-y-auto p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Full Message</h3>
            <button onclick="closeModal()" class="text-red-500">Close</button>
        </div>
        <p id="fullMessage" class="whitespace-pre-wrap text-sm"></p>
    </div>
</div>

@endsection

<script>
function openModal(message){
    document.getElementById('fullMessage').innerText = message;
    document.getElementById('msgModal').classList.remove('hidden');
    document.getElementById('msgModal').classList.add('flex');
}

function closeModal(){
    document.getElementById('msgModal').classList.add('hidden');
    document.getElementById('msgModal').classList.remove('flex');
}
</script>
