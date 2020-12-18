@extends("layouts.main")

@section('page_title')
    Home
@endsection

@section('content')

    <div class="grid grid-cols-1 p-5 md:grid-cols-2 lg:grid-cols-4">
        @foreach ($posts as $post)
        <x-post-card :post="$post"/>
        @endforeach

    </div>
    <div class="flex w-auto">
    {{ $posts->links('pagination::tailwind') }}
</div>
@endsection
