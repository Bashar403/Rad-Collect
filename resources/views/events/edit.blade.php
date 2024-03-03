@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-full">
    <div class="py-8">
        <h1 class="text-2xl mb-4">Edit Event</h1>
        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
            @csrf
            @method('PUT') <!-- Important for specifying the HTTP method as PUT -->

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text" placeholder="Event Name" value="{{ $event->name }}" required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                        Time
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="time" name="time" type="datetime-local" value="{{ optional($event->time)->format('Y-m-d\TH:i') }}"
                           required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="location">
                        Location
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="location" name="location" type="text" placeholder="Location" value="{{ $event->location }}" required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                        Event Image
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="image" name="image" type="file">
                    <span class="text-sm text-gray-600">Current Image: {{ $event->image }}</span>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Event
                </button>
            </div>
        </form>
    </div>
    </div>
@endsection
