@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 space-y-4">
            @foreach ($communities as $community)
                <div class="flex items-center border-b border-gray-200 py-4">
                    <img src="{{ asset($community->image) }}" alt="{{ $community->name }}" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $community->name }}</h3>
                        <p>{{ $community->email }}</p>
                        <p>{{ $community->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
