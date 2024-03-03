@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center border-2 border-gray-800 rounded-xl">
        <!-- Event Image -->
        <div class="row-start-1 md:col-start-1">
            <img src="{{ secure_asset($event->image) }}" alt="Event image" class="w-full h-56 object-cover object-center sm:rounded-l-lg sm:rounded-tr-none rounded-t-lg shadow-md">

        </div>
        <!-- Event Details -->
        <div class="mt-4 md:mt-0">
            <h2 class="text-3xl font-bold text-gray-800">Id: {{ $event->id }}</h2>
            <br>

            <h2 class="text-3xl font-bold text-gray-800">{{ $event->name }}</h2>
            <div class="mt-4 flex items-center">
                <img class="w-6 mr-2" src="{{secure_asset('Theme/imgs/time.svg')}}" alt="Time">
                <p class="text-xl text-gray-800">{{ $event->time }}</p>
            </div>
            <div class="mt-2 flex items-center">
                <img class="w-6 mr-2" src="{{secure_asset('Theme/imgs/map-pin.svg')}}" alt="Map">
                <p class="text-xl text-gray-800">{{ $event->location }}</p>
            </div>
        </div>
    </div>
@endsection
