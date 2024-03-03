<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="bg-yellow-50 font-hanken flex-col h-full">
    <div class="flex-grow flex flex-col">

    {{-- header and nav section--}}
        <div class="main-content">

            <header x-data="{ open: false }" class="flex flex-col">
                <nav class="bg-yellow-500 px-10">
                    <div class="flex justify-between items-center">
                        <a href="/RadsCollect" class="text-lg font-semibold"><img class="sm:w-32 w-20" src="{{asset('Theme/imgs/Logo.png')}}" alt="Website's Logo"></a>

                        <button @click="open = !open" class="text-lg md:hidden">
                            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                            <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>

                        <div class="md:flex hidden space-x-4 items-center gap-4">
                            <a href="about.html" class="text-white text-lg font-bold hover:text-blue-500">About</a>
                            <a href="event.html" class="text-white text-lg font-bold hover:text-blue-500">Events</a>
                            <a href="collection.html" class="text-white text-lg font-bold hover:text-blue-500">Collection</a>
                            <a href="community.html" class="text-white text-lg font-bold hover:text-blue-500">Community</a>
                            <div x-data="{ openDropdown: false }" class="relative text-lg">
                                <button @click="openDropdown = !openDropdown" class="text-white font-bold hover:text-blue-500">Contact Us</button>
                                <div x-show="openDropdown" @click.away="openDropdown = false" class="absolute mt-2 py-2 w-48 bg-white rounded-lg shadow-xl z-50">
                                    <a href="contact.html" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Contact</a>
                                    <a href="faq.html" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">FAQ</a>
                                </div>
                            </div>
                            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded font-bold hover:bg-blue-600">Sign Up</a>
                        </div>
                    </div>

                    <!-- Mobile and tab navigation bar -->
                    <div class="md:hidden py-5" x-show="open" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <a href="about.html" class="block py-2 text-white text-lg font-bold hover:text-blue-500">About</a>
                        <a href="event.html" class="block py-2 text-white text-lg font-bold hover:text-blue-500">Events</a>
                        <a href="collection.html" class="block py-2 text-white text-lg font-bold hover:text-blue-500">Collection</a>
                        <a href="community.html" class="block py-2 text-white text-lg font-bold hover:text-blue-500">Community</a>
                        <a href="contact.html" class="block py-2 text-white text-lg font-bold hover:text-blue-500">Contact</a>
                        <a href="faq.html" class="block py-2 text-white text-lg font-bold hover:text-blue-500">FAQ</a>
                        <a href="" class="bg-blue-500 text-white px-4 py-2 rounded font-bold hover:bg-blue-600">Sign Up</a>
                    </div>
                </nav>
            </header>

            {{--  Hero Section--}}
            <div class="flex flex-col items-center ">
                <h1 class="text-2xl font-bold text-gray-800 text-center mt-10 sm:text-4xl">Discover the Excitement of <br> Collectible and Events</h1>
                <p class="text-base text-gray-800 mt-5 text-center">Check out our UpComing Events</p>
                <a href="#" class="mt-5 bg-blue-500 text-white px-4 py-2 font-bold hover:bg-blue-600">Events</a>
                <a href="#" class="mt-5"><img class="lg:w-auto pt-3 w-96 max-w-lg" src="{{asset('Theme/imgs/Event.jpg')}}" alt="Website's Logo"></a>
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
                                <img src="{{asset('Theme/imgs/Event.jpg')}}" alt="Event Name" class="w-full h-56 object-cover object-center sm:rounded-l-lg sm:rounded-tr-none rounded-t-lg shadow-md">
                            </div>
                            <!-- Event Details -->
                            <div class="mt-4 p-6">
                                <h2 class="text-2xl font-bold text-gray-800">Event Name</h2>
                                <div class="mt-4 flex items-center">
                                    <img class="w-6 mr-2" src="{{asset('Theme/imgs/time.svg')}}" alt="Time">
                                    <p class="text-xl text-gray-800">12:00 PM</p>
                                </div>
                                <div class="mt-2 flex items-center">
                                    <img class="w-6 mr-2" src="{{asset('Theme/imgs/map-pin.svg')}}" alt="Map">
                                    <p class="text-xl text-gray-800">Location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <a href="">
                        <button class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">
                            View More
                        </button>
                    </a>
                </div>
            </div>

            {{-- Collection Section--}}
            <div class="p-12">
                <!-- Featured Collectibles Section -->
                <h4 class="text-2xl font-bold text-gray-800 text-center mt-10">Featured Collectibles</h4>
                <p class="text-base text-gray-800 mt-5 text-center">Click on the item to check its availability</p>

                <!-- Collectibles Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-9 mt-8">
                    <div class="border-2">
                        <a href="">
                            <div class="flex flex-col items-center gap-4">
                                <img class="w-full h-60 object-cover" src="{{asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                                <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                            </div>
                        </a>
                    </div>
                    <div class="border-2">
                        <a href="">
                            <div class="flex flex-col items-center gap-4">
                                <img class="w-full h-60 object-cover" src="{{asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                                <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                            </div>
                        </a>
                    </div>
                    <div class="border-2">
                        <a href="">
                            <div class="flex flex-col items-center gap-4">
                                <img class="w-full h-60 object-cover" src="{{asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                                <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                            </div>
                        </a>
                    </div>
                    <div class="border-2">
                        <a href="">
                            <div class="flex flex-col items-center gap-4">
                                <img class="w-full h-60 object-cover" src="{{asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                                <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                            </div>
                        </a>
                    </div>
                    <div class="border-2">
                        <a href="">
                            <div class="flex flex-col items-center gap-4">
                                <img class="w-full h-60 object-cover" src="{{asset('Theme/imgs/funko1.jpg')}}" alt="Collectible 1">
                                <h5 class="text-xl font-bold text-gray-800 text-center p-3">Collectible 1</h5>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <a href="">
                        <button class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">
                            View More
                        </button>
                    </a>
                </div>
            </div>






            {{--    Footer Section--}}
        <section class= "py-5">
            <div class="flex flex-col items-center">
                <img class="w-20" src="{{asset('Theme/imgs/Logo.png')}}" alt="Website's Logo">
                <div class="flex items-center gap-4 mt-4">
                    <a href="#" class="text-gray-800 text-lg font-bold hover:text-blue-500">Events</a>
                    <a href="#" class="text-gray-800 text-lg font-bold hover:text-blue-500">Collection</a>
                    <a href="#" class="text-gray-800 text-lg font-bold hover:text-blue-500">Community</a>
                    <a href="#" class="text-gray-800 text-lg font-bold hover:text-blue-500">Contact</a>

                </div>
            </div>
        </section>
        <footer class="bg-yellow-500 ">
            <div class="flex flex-col items-center">
                <div class="flex items-center gap-4 mt-4">
                    <a href="#" class="text-white text-lg font-bold hover:text-blue-500"><img class="w-10" src="{{asset('Theme/imgs/facebook.svg')}}" alt="Facebook"></a>
                    <a href="#" class="text-white text-lg font-bold hover:text-blue-500"><img class="w-11" src="{{asset('Theme/imgs/instagram.svg')}}" alt="instagram"></a>
                    <a href="#" class="text-white text-lg font-bold hover:text-blue-500"><img class="w-11" src="{{asset('Theme/imgs/youtube.svg')}}" alt="instagram"></a>
                </div>
                <p class="text-white my-4 font-bold">© 2024 SiteSoar</p>
            </div>
        </footer>
        </div>
    </div>
    </body>
</html>
