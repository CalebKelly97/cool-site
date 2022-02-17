<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 style="font-size: 2rem;" >{{ $post->title }}</h1>
                    <div class="py-6" >{{ $post->body }}</div>

                    @canany(['update', 'delete'], $post)    
                        <div class="py-6">
                            @can('update', $post)
                                <a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Edit Post</a>
                            @endcan

                            @can('delete', $post)
                                <a class="btn btn-danger" href="{{ route('posts.delete', $post)}}">Delete Post</a>
                            @endcan
                        </div>
                    @endcanany
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
