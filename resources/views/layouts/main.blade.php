<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('page_title')MessageLake @endsection @yield('page_title')</title>
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet" >
</head>
<body class="font-sans bg-gray-900 text-white">
    <!--                                                      .__          __
  _____   ____   ______ ___________     ____   ____   |  | _____  |  | __ ____
 /     \_/ __ \ /  ___//  ___/\__  \   / ___\_/ __ \  |  | \__  \ |  |/ // __ \
|  Y Y  \  ___/ \___ \ \___ \  / __ \_/ /_/  >  ___/  |  |__/ __ \|    <\  ___/
|__|_|  /\___  >____  >____  >(____  /\___  / \___  > |____(____  /__|_ \\___  >
      \/     \/     \/     \/      \//_____/      \/            \/     \/    \/
    -->
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="{{route('home.home')}}" class="text-xl">Massage<i class="fas fa-water"></i>Lake</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{route('home.home')}}" class="hover:text-gray-300">Home</a>
                </li>
                @if (!Auth::check())
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('register')}}" class="hover:text-gray-300">Registreren</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('login')}}" class="hover:text-gray-300">Login</a>
                </li>
                @else
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('posts.makepost')}}" class="hover:text-gray-300">Make post</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a class="hover:text-gray-300" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @if(Auth::user()->name == "Admin" || Auth::user()->name == "admin")
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{route('admin.admin')}}" class="hover:text-gray-300">Admin</a>
                </li>
                @endif
                @endif


            </ul>
            <div class="flex flex-col md:flex-row items-center">
                @if (!Auth::check())
                <div class="md:ml-4 mt-3 md:mt-0"><a href="#"><i class="far fa-user-circle rounded-full text-3xl"></i></a></div>
                @else
                <div class="md:ml-4 mt-3 md:mt-0"><a href="#">{{ Auth::user()->name }}</a></div>
                @endif
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://kit.fontawesome.com/af1b884290.js" crossorigin="anonymous"></script>
</body>
</html>
