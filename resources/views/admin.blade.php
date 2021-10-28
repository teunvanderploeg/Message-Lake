@extends("layouts.main")

@section('page_title')
    Admin
@endsection

@section('content')
    <h2 class="text-center text-3xl">Admin Page</h2>
    <div class="grid grid-cols-1">
        @foreach ($posts as $post)
        <x-admin-post-card :post="$post"/>
        @endforeach
        <a href="{{route('posts.create')}}" class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-60 mx-auto">Make post</a>
    </div>

@endsection
