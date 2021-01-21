<div class=" py-3 h-30 w-auto">
    <div class="bg-gray-700 shadow shadow-2xl flex" >
        <a href="posts/{{$post->id}}">
            @if ($post->img)
            <img src="{{ asset('storage/' . $post->img) }}" class="h-20">
            @endif
        </a>
        <div class="px-2 py-1 mt-1 bg-gray-700">
            <h2 class="font-bold text-m text-white">{{ $post->title }}</h2>
                <p class="text-xs text-white">{{ $post->content }}</p>
        </div>
        <div class="flex mr-5 ml-auto my-auto text-right">
            <a href="admin/delete/{{ $post->id }}" class="text-red-700 hover:text-red-800">Delete</a>
        </div>


    </div>
</div>
