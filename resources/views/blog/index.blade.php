<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h3>Ceci est un blog</h3>
    @foreach ($posts as $post)
        <div class="post">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->contenu }}</p>
            <p>Posté le {{ $post->created_at }}</p>
            <a href="{{ route('blog.view_update', $post->id) }}">Modifier</a>
        </div>
        <br/>
    @endforeach
    <a href="/blog/new">Nouveau post</a>
</body>