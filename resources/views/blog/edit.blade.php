<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nouveau post</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <h3>Nouveau post</h3>
    @if ($errors->any())
        <div class="alert alert-danger w-50 mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br/>
    <div>
        <form action="{{ route('blog.update', $post->id) }}" method="POST" class="w-50 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <input type="text" class="form-control" id="contenu" name="contenu" value="{{ $post->contenu }}">
            </div>
            <input type="hidden" name="id" value="{{ $post->id }}">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
        <form action="{{ route('blog.delete', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
    <a href="/blog">Retour au blog</a>
</body>