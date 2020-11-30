<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="../resources/css/app.css"> --}}
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet" >
</head>
<body class="bg-gray-500">
    <h1 class="font-100">Welkom on massage lake</h1>
    <p>
        Titel: {{ $post->title }}<br>
        Content: {{ $post->content }}<br>
        User: {{ $post->user }}<br>
        Time: {{ $post->time }}<br>
    </p>
</body>
</html>
