<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800 text-white border-b border-gray-200">
                    <h2>All Posts</h2>
                </div>
            </div>
        </div>
    </div>


    @foreach($posts as $post)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a class="text-blue-700" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('posts.create') }}">Create Post</a>
            </div>
        </div>
    </div>
</x-app-layout>
