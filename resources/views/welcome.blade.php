@extends('layouts.app')

@section('content')
    {{--  Hero Section--}}
    <div class="flex flex-col items-center ">
        <h1 class="text-2xl font-bold text-gray-800 text-center mt-10 sm:text-4xl">Discover the Excitement of <br> Collectible and Events</h1>
        <p class="text-base text-gray-800 mt-5 text-center">Check out our UpComing Events</p>
        <a href="{{ route('events.index')}}" class="mt-5 bg-blue-500 text-white px-4 py-2 font-bold hover:bg-blue-600">Events</a>
        <a href="#" class="mt-5"><img class="lg:w-auto pt-3 w-96 max-w-lg" src="{{secure_asset('Theme/imgs/Event.jpg')}}" alt="hero img"></a>
    </div>

    {{-- Event Section--}}

    <div class="w-full px-5 py-12">
        <h2 class="text-3xl font-bold text-gray-800 text-center mt-10 sm:text-4xl">Upcoming Events</h2>
        <p class="text-base text-gray-800 mt-5 text-center">Discover the latest events happening near you</p>

        <div class="pt-10 flex justify-center">
            <!-- Events List Container -->
            <div class="w-full lg:w-2/4 space-y-12">
                <!-- Example Event -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center border-2 border-gray-800 rounded-xl">
                    <!-- Event Image -->
                    <div class="row-start-1 md:col-start-1">
                        <img src="{{secure_asset('Theme/imgs/Event.jpg')}}" alt="Event image" class="w-full h-56 object-cover object-center sm:rounded-l-lg sm:rounded-tr-none rounded-t-lg shadow-md">
                    </div>
                    <!-- Event Details -->
                    <div class="mt-4 p-6">
                        <h2 class="text-2xl font-bold text-gray-800">Event Name</h2>
                        <div class="mt-4 flex items-center">
                            <img class="w-6 mr-2" src="{{secure_asset('Theme/imgs/time.svg')}}" alt="Time icon">
                            <p class="text-xl text-gray-800">12:00 PM</p>
                        </div>
                        <div class="mt-2 flex items-center">
                            <img class="w-6 mr-2" src="{{secure_asset('Theme/imgs/map-pin.svg')}}" alt="Map icon">
                            <p class="text-xl text-gray-800">Location</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('events.index')}}">
                <button class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">
                    View More
                </button>
            </a>
        </div>
    </div>

    {{-- Collection Section--}}
    <div class="p-12">
        <!-- Featured Collectibles Section -->
        <h2 class="text-3xl font-bold text-gray-800 text-center mt-10">Featured Collectibles</h2>
        <p class="text-base text-gray-800 mt-5 text-center">Click on the item to check its availability</p>

        <!-- Collectibles Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-9 mt-8">
            <div class="border-2">
                <a href="">
                    <div class="flex flex-col items-center gap-4">
                        <img class="w-full h-60 object-cover" src="{{secure_asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                        <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                    </div>
                </a>
            </div>
            <div class="border-2">
                <a href="">
                    <div class="flex flex-col items-center gap-4">
                        <img class="w-full h-60 object-cover" src="{{secure_asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                        <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                    </div>
                </a>
            </div>
            <div class="border-2">
                <a href="">
                    <div class="flex flex-col items-center gap-4">
                        <img class="w-full h-60 object-cover" src="{{secure_asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                        <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                    </div>
                </a>
            </div>
            <div class="border-2">
                <a href="">
                    <div class="flex flex-col items-center gap-4">
                        <img class="w-full h-60 object-cover" src="{{secure_asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                        <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                    </div>
                </a>
            </div>
            <div class="border-2">
                <a href="">
                    <div class="flex flex-col items-center gap-4">
                        <img class="w-full h-60 object-cover" src="{{secure_asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                        <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                    </div>
                </a>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('collections.index')}}">
                <button class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">
                    View More
                </button>
            </a>
        </div>
    </div>

@endsection
