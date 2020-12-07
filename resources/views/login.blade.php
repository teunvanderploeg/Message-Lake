@extends('layouts/main')

@section('page_title')
    Login
@endsection

@section('content')
<div class="w-64 flex shadow-lg mt-32 flex-col bg-cover bg-center justify-content bg-gray-900 p-6 rounded pt-8 pb-8 m-auto">
    <div class="text-center text-white mb-6">
      <h2>Login</h2>
    </div>
    <div>
      <form action="{{route("login.login")}}" method="POST">
        @csrf
        <input class="bg-transparent border-b m-auto block border-gray-500 w-full mb-6 text-white pb-1" type="text" placeholder="Email" id="email" name="email"/>
        @error('email')
          <p>{{ $message }}</p>
      @enderror
        <input class="bg-transparent border-b m-auto block border-gray-500 w-full mb-6 text-white pb-1" type="password" placeholder="password" id="password" name="password"/>
        @error('password')
          <p>{{ $message }}</p>
      @enderror
        
        <input class="shadow-lg pt-3 pb-3 mt-6 w-full text-white bg-blue-500 hover:bg-blue-400 rounded-full cursor-pointer" type="submit" value="Log in">
      </form>
    </div>
    <div>
      <p class="mt-4 text-gray-500 text-sm">No account? 
        <a href="#"
           class="no-underline text-blue-500 hover:text-blue-400">Registreren
        </a>
      </p>
    </div>
  </div>
@endsection