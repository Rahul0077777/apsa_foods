@extends('layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">

        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
            Distributor Packages
        </h1>

        <a href="{{ route('admin.distributor.create') }}"
           class="bg-primary hover:bg-green-500 text-[#0d1b0d]
                  px-5 py-2 rounded-lg font-semibold shadow-md shadow-primary/20">

            + Add Package

        </a>

    </div>


    {{-- Card --}}
    <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-md border border-gray-200 dark:border-zinc-800 overflow-hidden">


        <table class="w-full">

            {{-- Table Head --}}
            <thead class="bg-gray-50 dark:bg-zinc-800">

                <tr class="text-left text-sm font-semibold text-gray-600 dark:text-gray-300">

                    <th class="px-6 py-4">Image</th>

                    <th class="px-6 py-4">Title</th>

                    <th class="px-6 py-4">Type</th>

                    <th class="px-6 py-4">Price</th>

                    <th class="px-6 py-4">Status</th>

                    <th class="px-6 py-4 text-right">Action</th>

                </tr>

            </thead>


            {{-- Table Body --}}
            <tbody>

                @forelse($packages as $package)

                <tr class="border-t border-gray-200 dark:border-zinc-800 hover:bg-gray-50 dark:hover:bg-zinc-800 transition">


                    {{-- Image --}}
                    <td class="px-6 py-4">

                        <img src="{{ asset('storage/'.$package->image) }}"
                             class="h-14 w-14 object-cover rounded-lg border">

                    </td>


                    {{-- Title --}}
                    <td class="px-6 py-4 font-semibold text-gray-800 dark:text-white">

                        {{ $package->title }}

                    </td>


                    {{-- Type --}}
                    <td class="px-6 py-4">

                        <span class="px-3 py-1 text-xs font-bold rounded-full

                        {{ $package->type=='trial'
                            ? 'bg-blue-100 text-blue-600'
                            : 'bg-purple-100 text-purple-600' }}">

                            {{ ucfirst($package->type) }}

                        </span>

                    </td>


                    {{-- Price --}}
                    <td class="px-6 py-4 font-semibold">

                        ${{ number_format($package->price,2) }}

                    </td>


                    {{-- Status --}}
                    <td class="px-6 py-4">

                        @if($package->status)

                            <span class="bg-green-100 text-green-600 text-xs font-bold px-3 py-1 rounded-full">

                                Active

                            </span>

                        @else

                            <span class="bg-red-100 text-red-600 text-xs font-bold px-3 py-1 rounded-full">

                                Inactive

                            </span>

                        @endif

                    </td>


                    {{-- Actions --}}
                    <td class="px-6 py-4 text-right">

                        <div class="flex justify-end gap-2">


                            {{-- Edit --}}
                            <a href="{{ route('admin.distributor.edit',$package->id) }}"
                               class="bg-blue-100 hover:bg-blue-200 text-blue-600
                                      px-3 py-2 rounded-lg">

                                <span class="material-symbols-outlined text-sm">
                                    edit
                                </span>

                            </a>


                            {{-- Delete --}}
                            <form action="{{ route('admin.distributor.destroy',$package->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this package?')">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-100 hover:bg-red-200 text-red-600
                                               px-3 py-2 rounded-lg">

                                    <span class="material-symbols-outlined text-sm">
                                        delete
                                    </span>

                                </button>

                            </form>


                        </div>

                    </td>


                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-10 text-gray-500">

                        No Distributor Packages Found

                    </td>

                </tr>

                @endforelse


            </tbody>

        </table>

    </div>

</div>

@endsection