@php use Illuminate\Support\Str; @endphp
@extends('layouts.frontend')

@section('title','My Profile')

@section('content')
<div class="bg-background-light min-h-screen">
    <div class="max-w-[1280px] mx-auto px-4 md:px-10 py-10 flex flex-col md:flex-row gap-8">

        <!-- Left Sidebar -->
        <aside class="w-full md:w-72 flex flex-col gap-6">
            <!-- User Profile Card -->
            <div
                class="bg-white dark:bg-[#1a2e1a] p-6 rounded-xl border border-soft-green dark:border-[#2a3f2a] shadow-sm">
                <div class="flex flex-col items-center text-center gap-3">

                    <form action="{{ route('user.profile.photo') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label class="cursor-pointer block w-fit relative group">
                            <input type="file" name="profile_image" class="hidden" onchange="this.form.submit()">

                            <div class="size-20 rounded-full overflow-hidden border-4 border-soft-green">
    <img 
        src="{{ $user->profile_image 
                ? asset('storage/'.$user->profile_image) 
                : asset('images/default-avatar.png') }}"
        class="w-full h-full object-cover rounded-full"
        alt="Profile">
</div>

                            <!-- camera hover icon -->
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100
                    flex items-center justify-center rounded-full transition">
                                <span class="material-symbols-outlined text-white text-2xl">
                                    photo_camera
                                </span>
                            </div>
                        </label>
                    </form>
                    <div>
                        <h1 class="text-xl font-bold">{{ $user->name }}</h1>
                        <p class="text-accent-green dark:text-primary/70 text-sm font-medium">
                            Member since {{ $user->created_at->format('M Y') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="bg-white p-2 rounded-xl border shadow-sm flex flex-col gap-1">

                @php
                $active = 'bg-green-100 text-green-700 font-bold';
                $normal = 'text-gray-700 hover:bg-green-50 hover:text-green-600';
                @endphp

                <a href="{{ route('user.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition
   {{ request()->routeIs('user.dashboard') ? $active : $normal }}">
                    <span class="material-symbols-outlined">grid_view</span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('user.orders') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition
   {{ request()->routeIs('user.orders*') ? $active : $normal }}">
                    <span class="material-symbols-outlined">shopping_bag</span>
                    <span>Orders</span>
                </a>

                <a href="{{ route('user.profile') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition
   {{ request()->routeIs('user.profile') ? $active : $normal }}">
                    <span class="material-symbols-outlined">person</span>
                    <span>Profile Info</span>
                </a>

                <div class="h-px bg-gray-200 my-2"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="flex items-center gap-3 px-4 py-3 rounded-lg text-red-500 hover:bg-red-50 w-full text-left transition">
                        <span class="material-symbols-outlined">logout</span>
                        <span>Logout</span>
                    </button>
                </form>

            </nav>




        </aside>


        @if(request()->routeIs('user.dashboard'))
        <!-- Right Content -->
        <section class="flex-1 space-y-8">
            @if(request()->routeIs('user.dashboard'))
            <div class="bg-white p-6 rounded-xl shadow mb-6">
                <h2 class="text-xl font-bold mb-4">Dashboard Overview</h2>

                <div class="grid grid-cols-3 gap-4">
                    <div class="p-4 bg-soft-green rounded">
                        <p class="text-sm">Total Orders</p>
                        <h3 class="text-2xl font-bold">{{ $totalOrders }}</h3>
                    </div>

                    <div class="p-4 bg-soft-green rounded">
                        <p class="text-sm">Default Address</p>
                        <h3 class="text-sm font-bold">
                            {{ $defaultAddress->city ?? 'Not Set' }}
                        </h3>
                    </div>

                    <div class="p-4 bg-soft-green rounded">
                        <p class="text-sm">Account</p>
                        <h3 class="text-sm font-bold">{{ $user->email }}</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-3">Recent Orders</h2>

                @foreach($orders as $order)
                <div class="border-b py-2 flex justify-between">
                    <span>#{{ $order->id }}</span>
                    <span>{{ $order->status }}</span>
                    <span>₹{{ $order->total_amount }}</span>
                </div>
                @endforeach
            </div>
            @endif
        </section>
        @endif

        @if(request()->routeIs('user.profile'))
        <section class="flex-1 space-y-8">

            <!-- Profile -->
            <div class="bg-white p-8 rounded-xl shadow">
                <h2 class="text-2xl font-bold mb-6">Profile Details</h2>

                <form method="POST" action="{{ route('user.profile.update') }}"
                    class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf

                    <div>
                        <label class="text-sm font-semibold">First Name</label>
                        <input name="first_name" value="{{ explode(' ', $user->name)[0] }}"
                            class="w-full rounded-lg border p-3">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Last Name</label>
                        <input name="last_name" value="{{ explode(' ', $user->name)[1] ?? '' }}"
                            class="w-full rounded-lg border p-3">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Email</label>
                        <input value="{{ $user->email }}" disabled class="w-full rounded-lg border p-3 bg-gray-100">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Phone</label>
                        <input name="phone" value="{{ $user->phone }}" class="w-full rounded-lg border p-3">
                    </div>

                    <div class="md:col-span-2 text-right">
                        <button class="bg-primary px-6 py-3 rounded-lg font-bold">Save Changes</button>
                    </div>
                </form>
            </div>

            <!-- Addresses -->
            <div class="bg-white p-8 rounded-xl shadow">
                <div class="flex justify-between mb-6">
                    <h2 class="text-xl font-bold">Saved Addresses</h2>
                    <a href="#" onclick="openAddressModal()" class="text-primary font-bold">+ Add New</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($addresses as $address)
                    <div class="border rounded-xl p-5 {{ $address->is_default ? 'border-primary bg-primary/5' : '' }}">
                        <h3 class="font-bold">{{ $address->type }}</h3>
                        <p class="text-sm mt-1">
                            {{ $address->address }}, {{ $address->city }}, {{ $address->state }} -
                            {{ $address->pincode }}
                        </p>

                        @if($address->is_default)
                        <p class="text-primary font-semibold mt-2">Default</p>
                        @else
                        <form method="POST" action="{{ route('address.default',$address->id) }}">
                            @csrf
                            <button class="text-sm text-primary mt-2">Set as Default</button>
                        </form>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>


        </section>
        @endif






    </div>
</div>

<div id="addressModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <h3 class="text-lg font-bold mb-4">Add New Address</h3>

        <form method="POST" action="{{ route('address.store') }}" class="space-y-3">
            @csrf
            <input name="type" placeholder="Home / Work" class="w-full border p-2 rounded">
            <input name="address" placeholder="Address" class="w-full border p-2 rounded">
            <input name="city" placeholder="City" class="w-full border p-2 rounded">
            <input name="state" placeholder="State" class="w-full border p-2 rounded">
            <input name="pincode" placeholder="Pincode" class="w-full border p-2 rounded">

            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeAddressModal()">Cancel</button>
                <button class="bg-primary px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection


<script>
function openAddressModal() {
    document.getElementById('addressModal').classList.remove('hidden');
    document.getElementById('addressModal').classList.add('flex');
}

function closeAddressModal() {
    document.getElementById('addressModal').classList.add('hidden');
}
</script>