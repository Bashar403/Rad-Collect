@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-2/3">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <h1 class="text-4xl font-semibold">Community Members</h1>
        <p class="text-gray-600 pb-1">Connect with passionate individuals from our diverse community.</p>

        <!-- Search Form -->
        <form action="{{ route('communities.index') }}" method="GET" class="my-4 flex">
            <input type="text" name="search" x-model="search" placeholder="Search members..." class="border p-2 flex-grow" />
            <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">
                Search
            </button>
        </form>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @forelse ($communities as $community)
                <div class="bg-white shadow rounded overflow-hidden group">
                    <img src="{{ asset($community->image) }}" alt="{{ $community->name }}" class="w-full h-48 object-cover object-center">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">{{ $community->name }}</h3>
                        <p class="text-gray-700 mb-3">{{ Str::limit($community->description, 80) }}</p>
                        <a href="mailto:{{ $community->email }}" class="text-sm text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">Connect</a>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500">No community members found.</p>
            @endforelse
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $communities->appends(['search' => request('search')])->links() }}
        </div>
    </div>
    </div>
@endsection

