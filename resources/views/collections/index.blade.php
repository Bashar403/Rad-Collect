@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-full">
        <div class="w-full px-5 py-12">
            <h2 class="text-3xl font-bold text-gray-800 text-center mt-10 sm:text-4xl">Collection Items</h2>
            <div class="pt-10 flex justify-center">
                <div class="w-full lg:w-3/4 space-y-12">
                    @foreach ($collections as $collection)
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center border-2 border-gray-800 rounded-xl">
                            <div class="row-start-1 md:col-start-1">
                                <img src="{{ secure_asset($collection->image) }}" alt="Collection Image" class="w-full h-56 object-cover object-center sm:rounded-l-lg sm:rounded-tr-none rounded-t-lg shadow-md">
                            </div>
                            <div class="mt-4 md:mt-0">
                                <h2 class="text-3xl font-bold text-gray-800">{{ $collection->name }}</h2>
                                <p class="text-xl text-gray-800">Type: {{ $collection->type }}</p>
                                <a href="{{ $collection->link }}" class="text-blue-500 hover:text-blue-700" target="_blank">View More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
