<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="bg-yellow-50 font-hanken  flex-col h-full">
<div class="flex-grow flex flex-col">

    <!-- navigation bar -->
    <div class="main-content">

        <header x-data="{ open: false }" class="flex flex-col">
            <nav class="bg-yellow-500 px-10">
                <div class="flex justify-between items-center">
                    <a href="/RadsCollect" class="text-lg font-semibold"><img class="sm:w-32 w-20" src="{{secure_asset('Theme/imgs/Logo.png')}}" alt="Website's Logo"></a>

                    <button @click="open = !open" class="text-lg md:hidden">
                        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                        <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>

                    <div class="md:flex hidden space-x-4 items-center gap-4">
                        <a href="{{ route('about') }}" class="text-white text-lg font-bold hover:text-blue-500">About Us</a>
                        <a href="{{ route('events.index')}}" class="text-white text-lg font-bold hover:text-blue-500">Events</a>
                        <a href="{{ route('media.index')}}" class="text-white text-lg font-bold hover:text-blue-500">media</a>
                        <a href="{{ route('contacts.create')}}" class="text-white text-lg font-bold hover:text-blue-500">Contact</a>
                        <a href="{{ route('faq') }}" class="text-white text-lg font-bold hover:text-blue-500">FAQ</a>
                    </div>
                </div>

                <!-- Mobile and tab navigation bar -->
                <div class="md:hidden py-5" x-show="open" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <a href="{{ route('about') }}" class="block py-2 text-white text-lg font-bold hover:text-blue-500">About</a>
                    <a href="{{ route('events.index')}}" class="block py-2 text-white text-lg font-bold hover:text-blue-500">Events</a>
                    <a href="{{ route('media.index')}}" class="block py-2 text-white text-lg font-bold hover:text-blue-500">media</a>
                    <a href="{{ route('contacts.create')}}" class="block py-2 text-white text-lg font-bold hover:text-blue-500">Contact</a>
                    <a href="{{ route('faq') }}" class="block py-2 text-white text-lg font-bold hover:text-blue-500">FAQ</a>
                </div>
            </nav>
        </header>

        @yield('content')



        {{--    Footer Section--}}
        <section class= "py-5">
            <div class="flex flex-col items-center">
                <img class="w-20" src="{{secure_asset('Theme/imgs/Logo.png')}}" alt="Website's Logo">
                <div class="flex items-center gap-4 mt-4">
                    <a href="{{ route('events.index')}}" class="text-gray-800 text-sm font-bold hover:text-blue-500">Events</a>
                    <a href="{{ route('media.index')}}" class="text-gray-800 text-sm font-bold hover:text-blue-500">media</a>
                    <a href="{{ route('contacts.create')}}" class="text-gray-800 text-sm font-bold hover:text-blue-500">Contact</a>

                </div>
            </div>
        </section>
        <footer class="bg-yellow-500 ">
            <div class="flex flex-col items-center">
                <div class="flex items-center gap-4 mt-4">
                    <a href="https://www.facebook.com/robbie.durling.9?mibextid=ZbWKwL&paipv=0&eav=Afbs4empNI3VQGcPpPvuRt_irK1mOlPu1q8Ufe8x9t1xHQt8ejfwawh69Z9L7n439mw&_rdr" class="text-white text-lg font-bold hover:text-blue-500"><img class="w-10" src="{{asset('Theme/imgs/facebook.svg')}}" alt="Facebook icon"></a>
                    <a href="https://www.instagram.com/robbied_scc/" class="text-white text-lg font-bold hover:text-blue-500"><img class="w-11" src="{{secure_asset('Theme/imgs/instagram.svg')}}" alt="instagram icon"></a>
                    <a href="https://www.youtube.com/@rad124" class="text-white text-lg font-bold hover:text-blue-500"><img class="w-11" src="{{secure_asset('Theme/imgs/youtube.svg')}}" alt="youtube icon"></a>
                </div>
                <p class="text-white my-4 font-bold">© 2024 SiteSoar</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
