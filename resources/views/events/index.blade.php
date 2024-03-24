@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-gray-800 text-center ">Upcoming Event</h2>
        <p class="text-base text-gray-800 mt-5 text-center mb-12">Don't miss out on our next big event!</p>

        <!-- Single Event Container -->
        <div class="flex flex-col items-center">
            @forelse ($events as $event)
                <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full mb-8">
                    <!-- Event Image -->
                    <div class="w-full h-64 sm:h-96 overflow-hidden rounded-t-lg">
                        <img src="{{ secure_asset($event->image) }}" alt="Event image" class="w-full h-full object-cover">
                    </div>

                    <!-- Event Details -->
                    <div class="p-4 md:p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $event->name }}</h3>
                        <div class="flex items-center mb-4">
                            <img class="w-5 h-5 mr-2" src="{{secure_asset('Theme/imgs/time.svg')}}" alt="Time">
                            <p class="text-gray-600">{{ $event->time }}</p>
                        </div>
                        <div class="flex items-center mb-4">
                            <img class="w-5 h-5 mr-2" src="{{secure_asset('Theme/imgs/map-pin.svg')}}" alt="Location">
                            <p class="text-gray-600">{{ $event->location }}</p>
                        </div>
                        <a href="#" class="inline-block bg-yellow-500 text-white font-bold rounded-lg px-6 py-2 hover:bg-yellow-600 transition-colors duration-200">Learn More</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">No upcoming events found.</p>
            @endforelse
        </div>
    </div>
@endsection
