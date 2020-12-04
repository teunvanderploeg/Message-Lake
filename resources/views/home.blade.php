@extends("layouts.main")

@section('page_title')
    Home
@endsection

@section('content')

    <div class="grid grid-cols-2 p-5">
        @foreach ($post as $post)
        <x-post-card :post="$post"/>
        @endforeach
    </div>

@endsection