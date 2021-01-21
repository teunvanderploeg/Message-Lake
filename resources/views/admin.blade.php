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

    </div>

@endsection
