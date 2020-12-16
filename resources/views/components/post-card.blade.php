<div class="m-auto px-4 py-8 max-w-xl">
    <div class="bg-gray-700 shadow shadow-2xl hover:shadow-md hover:bg-white cursor-pointer transition" >
        <div>
            @if ($post->img)
            <img src="{{ asset('storage/' . $post->img) }}">
            @endif
        </div>
        <div class="px-4 py-2 mt-2 bg-gray-700">
            <h2 class="font-bold text-2xl text-white">{{ $post->title }}</h2>
                <p class="sm:text-sm text-m text-white mr-1 my-3">{{ $post->content }}</p>
            <div class="user flex items-center -ml-3 mt-8 mb-4">
                <a class="text-white-200 text-xs px-3 ">{{ $post->updated_at }}</a>
            </div>
        </div>
    </div>
</div>
