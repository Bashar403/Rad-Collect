@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-2/3">
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Full Name:</label>
                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" placeholder="Your Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('full_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="you@example.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number:</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('phone_number')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                        <textarea name="message" id="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
