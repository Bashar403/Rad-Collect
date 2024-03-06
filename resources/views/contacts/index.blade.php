@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 space-y-4">
            @foreach ($contacts as $contact)
                <div class="flex flex-col border-b border-gray-200 py-4">
                    <h3 class="text-lg font-semibold">{{ $contact->full_name }}</h3>
                    <p>{{ $contact->email }}</p>
                    <p>{{ $contact->phone_number }}</p>
                    <p>{{ $contact->message }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
