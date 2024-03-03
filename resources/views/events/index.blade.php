@extends('layouts.app')

@section('content')
    <div class="py-8">
        <div class="mb-4">
            <a href="{{ route('events.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add New Event
            </a>
        </div>
        @foreach ($events as $event)
            <div class="max-w-sm w-full lg:max-w-full lg:flex mb-4">
                <div class="border-r border-b border-l border-t border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 font-bold text-xl mb-2">{{ $event->name }}</div>
                        <p class="text-gray-700 text-base">{{ $event->location }}</p>
                        <p class="text-gray-700 text-base">{{ $event->time }}</p>
                    </div>
                    <div class="flex items-center">
                        <a href="{{ route('events.edit', $event->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

