<div class=" py-3 h-30 w-auto">
    <div class="bg-gray-700 shadow shadow-2xl flex" >
        <a href="{{route('posts.show', $post->id)}}">
            @if ($post->img)
            <img src="{{ asset('storage/' . $post->img) }}" class="h-20">
            @endif
        </a>
        <div class="px-2 py-1 mt-1 bg-gray-700">
            <h2 class="font-bold text-m text-white">{{ $post->title }}</h2>
                <p class="text-xs text-white">{{ $post->content }}</p>
        </div>
        <div class="flex mr-5 ml-auto my-auto text-right">
            <a href="{{route('admin.delete', $post->id)}}" class="text-red-700 hover:text-red-800 m-2">Delete</a>
            <a href="{{route('posts.edit', $post->id)}}" class="text-green-700 hover:text-green-800  m-2">Edit</a>
        </div>


    </div>
</div>
