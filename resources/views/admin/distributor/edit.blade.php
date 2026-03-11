@extends('layouts.admin')

@section('content')

<div class="max-w-5xl mx-auto">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">

        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
            Edit Distributor Package
        </h1>

        <a href="{{ route('admin.distributor.index') }}"
           class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg text-sm font-semibold">

            Back

        </a>

    </div>


    {{-- Card --}}
    <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-md border border-gray-200 dark:border-zinc-800 p-6">

        <form action="{{ route('admin.distributor.update',$package->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="grid grid-cols-1 md:grid-cols-2 gap-6">

            @csrf
            @method('PUT')


            {{-- TITLE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Title
                </label>

                <input type="text"
                       name="title"
                       value="{{ $package->title }}"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary outline-none">
            </div>


            {{-- TYPE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Type
                </label>

                <select name="type"
                        class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2">

                    <option value="trial"
                        {{ $package->type=='trial'?'selected':'' }}>
                        Trial Pack
                    </option>

                    <option value="bulk"
                        {{ $package->type=='bulk'?'selected':'' }}>
                        Bulk Order
                    </option>

                </select>
            </div>


            {{-- PRICE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Price
                </label>

                <input type="number"
                       name="price"
                       value="{{ $package->price }}"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">
            </div>


            {{-- BUTTON TEXT --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Button Text
                </label>

                <input type="text"
                       name="button_text"
                       value="{{ $package->button_text }}"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">
            </div>


            {{-- FEATURES --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold mb-1">
                    Features
                </label>

                <textarea name="features"
                          rows="4"
                          class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">@foreach($package->features as $feature){{ $feature }}
@endforeach</textarea>
            </div>


            {{-- IMAGE --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Change Image
                </label>

                <input type="file"
                       name="image"
                       id="imageInput"
                       class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2">

                {{-- Preview --}}
                <img id="preview"
                     src="{{ asset('storage/'.$package->image) }}"
                     class="mt-3 h-24 rounded-lg border">
            </div>


            {{-- STATUS --}}
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-gray-300 dark:border-zinc-700 rounded-lg px-4 py-2">

                    <option value="1"
                        {{ $package->status?'selected':'' }}>
                        Active
                    </option>

                    <option value="0"
                        {{ !$package->status?'selected':'' }}>
                        Inactive
                    </option>

                </select>
            </div>


            {{-- UPDATE BUTTON --}}
            <div class="md:col-span-2">

                <button type="submit"
                        class="bg-primary hover:bg-green-500 text-[#0d1b0d] px-6 py-3 rounded-lg font-bold shadow-md shadow-primary/20">

                    Update Distributor Package

                </button>

            </div>


        </form>

    </div>

</div>


{{-- Image Preview Script --}}
<script>
document.getElementById('imageInput').onchange = function(evt)
{
    const [file] = this.files;

    if(file)
    {
        document.getElementById('preview').src =
            URL.createObjectURL(file);
    }
};
</script>


@endsection