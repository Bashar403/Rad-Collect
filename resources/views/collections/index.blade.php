@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-fit">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-6">Collections</h1>

            <!-- Search and Filter Form -->
            <form action="{{ route('collections.index') }}" method="GET" class="mb-6">
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-4">
                    <input type="text" name="search" placeholder="Search collections..." value="{{ request('search') }}" class="border p-2 flex-grow" />

                    <select name="type" class="border p-2">
                        <option value="">All Types</option>
                        <option value="cards" {{ request('type') == 'cards' ? 'selected' : '' }}>Cards</option>
                        <option value="collectibles" {{ request('type') == 'collectibles' ? 'selected' : '' }}>Collectibles</option>
                    </select>

                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring">
                        Search
                    </button>
                </div>
            </form>


            <!-- Cards Display -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse ($collections as $collection)
                    <div class="border-2 p-4">
                        <a href="{{ $collection->link }}" target="_blank">
                            <img src="{{ secure_asset($collection->image) }}" alt="picture of {{ $collection->name }}" class="w-full h-48 object-cover">
                            <h3 class="text-xl font-bold text-gray-800 mt-2">{{ $collection->name }}</h3>
                        </a>
                    </div>
                @empty
                    <div class="col-span-full text-center">
                        <p class="text-gray-700">No collections found.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $collections->appends(request()->except('page'))->links() }}
            </div>



        </div>
    </div>
@endsection
