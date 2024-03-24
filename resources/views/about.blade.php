@extends('layouts.app')

@section('content')
    <div class="flex justify-center sm:h-full lg:h-3/4">
        <div class="w-full sm:w-3/4 p-10">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-10">About Us</h1>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Journey in the World of Collectibles</h2>

            <div class="block lg:flex items-center lg:items-start text-left">

                <div class="lg:flex-1 ">
                    <p class="text-lg sm:text-base lg:text-lg text-gray-800 mb-4">
                        Welcome to our passionate community of trading card enthusiasts! This weekend marks a significant moment for us in Windsor, as we return to in-person shows in South Walkerville. I, Robbie Durling, am the proud organizer of the Rad Sports Card and Collectibles Show at the Optimist Centre. Our venture into the world of collectibles is fueled by a simple belief: the thrill of the find can turn any investment into a treasure, whether it be $100 transforming into $1,000, or an experience that enriches our collective passion.
                    </p>
                    <p class="text-lg sm:text-base lg:text-lg text-gray-800">
                        Our drive is powered by a deep love for all kinds of trading cards—be it baseball, hockey, football, or Pokémon. We're on a mission to bring together collectors and enthusiasts, offering something for everyone, regardless of budget. From coveted high-end collectibles like LeBron’s and Gretzky's to those unique finds that complete a collection, our goal is to ensure every visit leaves you inspired and satisfied.
                    </p>
                </div>

                <!-- Image -->
                <div class="mt-4 lg:mt-0 lg:ml-8">
                    <img class="w-64 h-64 object-cover rounded-full mx-auto lg:mx-0" src="{{secure_asset('Theme/imgs/Picture of Robbie.jpeg')}}" alt="Robbie Durling">
                </div>
            </div>
        </div>
    </div>
@endsection
