

@extends('layouts/main')

@section('page_title')
    Posts
@endsection

@section('content')

<div class="movie-info boder-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ asset('storage/' . $post->img) }}" class="max-w-4xl">
        <div class="ml-2 md:ml-24">
        <h2 class="text-4xl font-semibold">{{ $post->title }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm mt-3">
                @if ($post->created_at == $post->updated_at)
                    <span class="ml-1">{{ $post->created_at}}</span>
                @else
                    <span class="ml-1">{{ $post->created_at}}</span>
                    <span class="mx-2"> | </span>
                    <span class="ml-1">{{ $post->updated_at}}</span>
                @endif
            </div>
        <p class="text-gray-300 mt-8 ">{{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection
