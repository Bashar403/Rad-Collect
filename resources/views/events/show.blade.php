@extends('layouts.app')

@section('content')
    <div class="py-8">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            @if($event->image)
                <img src="{{ asset($event->image) }}" alt="Event Image">
            @endif
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $event->name }}</div>
                <p class="text-gray-700 text-base">
                    Time: {{ $event->time }}
                </p>
                <p class="text-gray-700 text-base">
                    Location: {{ $event->location }}
                </p>


            </div>
        </div>
    </div>
@endsection
