<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div class="container mx-auto px-4">
            <div class="py-32">
                <h1 class=" mb 4 font-bold hover:bg-amber-300">Welcome to the Event Management System</h1>
                </div>
        </div>
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Click me
        </button>
        <a href="{{ route('events.index') }}">View Events</a>



    </body>
</html>
