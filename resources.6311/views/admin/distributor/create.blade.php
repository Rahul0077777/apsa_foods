@extends('layouts.admin')

@section('content')

<div class="max-w-5xl mx-auto">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">

        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
            Add Distributor Package
        </h1>

        <a href="{{ route('admin.distributor.index') }}"
           class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg text-sm font-semibold">

            Back

        </a>

    </div>


    {{-- Card --}}
    <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-md border border-gray-200 dark:border-zinc-800 p-6">

        <form action="{{ route('admin.distributor.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="grid grid-cols-1 md:grid-cols-2 gap-6">

            @csrf


            {{-- TITLE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Title
                </label>

                <input type="text"
                       name="title"
                       placeholder="Distributor Trial Pack"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary outline-none">
            </div>


            {{-- TYPE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Type
                </label>

                <select name="type"
                        class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">

                    <option value="trial">Trial Pack</option>
                    <option value="bulk">Bulk Order</option>

                </select>
            </div>


            {{-- PRICE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Price
                </label>

                <input type="number"
                       name="price"
                       placeholder="49"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">
            </div>


            {{-- BUTTON TEXT --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Button Text
                </label>

                <input type="text"
                       name="button_text"
                       placeholder="Customize Trial Pack"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">
            </div>


            {{-- FEATURES --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold mb-1">
                    Features
                </label>

                <textarea name="features"
                          placeholder="One feature per line"
                          rows="4"
                          class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary"></textarea>
            </div>


            {{-- IMAGE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Image
                </label>

                <input type="file"
                       name="image"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2">
            </div>


            {{-- STATUS --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2">

                    <option value="1">Active</option>
                    <option value="0">Inactive</option>

                </select>
            </div>


            {{-- SUBMIT --}}
            <div class="md:col-span-2">

                <button type="submit"
                        class="bg-primary hover:bg-green-500 text-[#0d1b0d] px-6 py-3 rounded-lg font-bold shadow-md shadow-primary/20">

                    Save Distributor Package

                </button>

            </div>


        </form>

    </div>

</div>

@endsection