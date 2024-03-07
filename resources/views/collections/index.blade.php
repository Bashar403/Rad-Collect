@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-fit">
        <div class="p-10">
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-6">Collection</h1>

            <!-- Subheader and Cards -->
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Cards and Collectible </h3>

            <!-- Search and Filter -->
            <div class="mb-6">
                <input type="text" placeholder="Search collections..." class="border p-2 w-full mb-4" />
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring">
                        Filter
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Filter Option 1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Filter Option 2</a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- card -->
                @foreach ($collections as $collection)
                    <div class="border-2 p-4">
                        <a href="{{ $collection->link }}">
                            <img src="{{ secure_asset($collection->image) }}" alt="picture of {{ $collection->name }}" class="w-full h-48 object-cover">
                            <h3 class="text-xl font-bold text-gray-800 mt-2">{{ $collection->name }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
