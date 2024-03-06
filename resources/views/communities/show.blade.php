@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-full">
        <div class="w-full max-w-4xl px-10 py-6 bg-white shadow-md rounded-lg">
            <h2 class="text-3xl font-bold text-gray-800">{{ $community->name }}</h2>
            <div class="mt-4">
                <img src="{{ asset($community->image) }}" alt="Image of {{ $community->name }}" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
            <div class="mt-4">
                <p>Email: <a href="mailto:{{ $community->email }}" class="text-blue-500">{{ $community->email }}</a></p>
                <p class="mt-2">{{ $community->description }}</p>
            </div>
        </div>
    </div>
@endsection
