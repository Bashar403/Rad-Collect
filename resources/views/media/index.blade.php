@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 text-center sm:h-full">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Media Gallery</h1>
        <p class="text-md text-gray-600 mb-8">Explore our curated collection of interviews, articles, and news in the world of sports and collectibles.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 justify-center items-center">

            @forelse ($mediaItems as $mediaItem)
                <div class="transform transition duration-500 hover:scale-105">
                    <a href="{{ $mediaItem->link }}" target="_blank" class="block overflow-hidden shadow-lg rounded-lg cursor-pointer m-auto">
                        <div style="height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                            <img alt="{{ $mediaItem->title }}" src="{{ Storage::disk('public')->url($mediaItem->img_url) }}" class="max-h-48 w-full object-cover transition duration-300 ease-in-out hover:opacity-75" style="object-fit: cover; min-height: 100%;">
                        </div>
                        <div class="bg-white p-6">
                            <div style="margin-bottom: 0.5rem;"> <!-- Adjusted margin-bottom here -->
                                <p class="text-indigo-500 text-md font-medium">
                                    {{ $mediaItem->type }}
                                </p>
                                <p class="text-gray-800 text-xl font-medium mb-2" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $mediaItem->title }}
                                </p>
                            </div>
                            <div style="height: 4.5rem; overflow: hidden; text-overflow: ellipsis;">
                                <p class="text-gray-400 font-light text-md">
                                    {{ Str::limit($mediaItem->description, 100) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            @empty
                <p class="text-gray-600">No media items found.</p>
            @endforelse
        </div>
    </div>
@endsection
