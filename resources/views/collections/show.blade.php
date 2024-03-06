@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">{{ $collection->name }}</h2>
                <img src="{{ asset($collection->image) }}" alt="Collection Image" class="mb-4">
                <p>Type: {{ ucwords($collection->type) }}</p>
                <p>Link: <a href="{{ $collection->link }}" class="text-blue-500">{{ $collection->link }}</a></p>
                <a href="{{ route('collections.edit', $collection->id) }}">Edit</a>
                <form action="{{ route('collections.destroy', $collection->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        </div>

    </div>
@endsection
