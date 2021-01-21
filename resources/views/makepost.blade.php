@extends("layouts.main")

@section('page_title')
    Make Post
@endsection

@section('content')
<div></div>
<div class="w-full max-w-xs m-auto mt-32 shadow-lg">
  <form action="{{route("posts.handle")}}" method="POST" class="bg-gray-900 rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <label class="block text-white text-sm font-semibold mb-2" for="title">Title</label>
      <input class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="Title"/>
    </div>
    @error('title')
          <p>{{ $message }}</p><br>
      @enderror
    <div class="mb-4">
      <label class="block text-white text-sm font-semibold mb-2" for="content">Content</label>
      <textarea class="bg-gray-100 p-1 appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-60" id="content" type="text" name="content" value=""/></textarea>
      @error('content')
          <p>{{ $message }}</p><br>
      @enderror
    </div>
    <input type="file" id="img" name="img"/>
    @error('img')
          <p>{{ $message }}</p><br>
      @enderror
      <div class="flex items-center justify-between">
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{route('home.home')}}">Cancel</a>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Create post">
    </div>
  </form>
</div>
@endsection
