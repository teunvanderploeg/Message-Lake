<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welkom on massage lake</h1>
    <p>
        Titel: {{ $post->title }}<br>
        Content: {{ $post->content }}<br>
        User: {{ $post->user }}<br>
        Time: {{ $post->time }}<br>
    </p>
</body>
</html>
