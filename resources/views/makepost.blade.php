@extends("layouts.main")

@section('page_title')
    Make Post
@endsection

@section('content')

<form action="{{route("posts.handle")}}" method="POST">
    @csrf
    <label for="fname">Title:</label><br>
  <input class="text-black" type="text" id="title" name="title" value=""><br>
    @error('title')
        <p>{{ $message }}</p>
    @enderror
  <label for="lname">Content:</label><br>
  <input class="text-black" type="text" id="content" name="content" value=""><br><br>
  <button type="submit" class="bg-green-500">opslaan</button>
</form>

@endsection