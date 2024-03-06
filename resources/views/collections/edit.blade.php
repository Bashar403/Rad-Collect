@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <form action="{{ route('collections.update', $collection->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name Input -->
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $collection->name }}" required>
                </div>

                <!-- Image Input -->
                <div class="mb-4">
                    <label for="image" class="sr-only">Image</label>
                    <input type="file" name="image" id="image" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    Current Image: <img src="{{ asset($collection->image) }}" alt="Current Image" height="100">
                </div>

                <!-- Link Input -->
                <div class="mb-4">
                    <label for="link" class="sr-only">Link</label>
                    <input type="url" name="link" id="link" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $collection->link }}" required>
                </div>

                <!-- Type Select -->
                <div class="mb-4">
                    <label for="type" class="sr-only">Type</label>
                    <select name="type" id="type" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                        <option value="cards" {{ $collection->type === 'cards' ? 'selected' : '' }}>Cards</option>
                        <option value="collectibles" {{ $collection->type === 'collectibles' ? 'selected' : '' }}>Collectibles</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
