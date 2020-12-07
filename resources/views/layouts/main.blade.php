<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('page_title')MassageLake @endsection @yield('page_title')</title>
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet" >
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="{{route('home.home')}}" class="text-xl">Massage<i class="fas fa-water"></i>Lake</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{route('home.home')}}" class="hover:text-gray-300">Home</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('posts.makepost')}}" class="hover:text-gray-300">Make post</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('registreren.show')}}" class="hover:text-gray-300">Registreren</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('login.loginpage')}}" class="hover:text-gray-300">Login</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                
                <div class="md:ml-4 mt-3 md:mt-0"><a href="#"><i class="far fa-user-circle rounded-full text-3xl"></i></a></div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://kit.fontawesome.com/af1b884290.js" crossorigin="anonymous"></script>
</body>
</html>