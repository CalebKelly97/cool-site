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
                    <h2>Create Post</h2>

                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="titel">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <input type="textarea" class="form-control" name="body" value="{{ $post->body }}">
                        </div>                    

                        <button class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
