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
    @include('partials.header')
    <br /><br />
    <h2>Blog : Veille technologique</h2>
    <div class="container vulkan">
        <h3>Qu'est-ce que Vulkan?</h3>
        <img src="{{ asset('/img/vulkan.png') }}" alt="Vulkan" style="max-width: 400px; margin: 20px auto;">
        <p>Vulkan est une API graphique de bas niveau qui permet aux développeurs de créer des applications graphiques
            performantes et efficaces.</p>
        <p>Contrairement à d'autres API graphiques comme OpenGL, Vulkan offre un contrôle plus direct sur le matériel
            graphique, ce qui permet aux développeurs de mieux optimiser leurs applications pour des performances
            maximales.</p>
        <p>Vulkan est également conçu pour être multiplateforme, ce qui signifie qu'il peut être utilisé pour développer
            des applications graphiques sur une variété de systèmes d'exploitation, y compris Windows, Linux, Android et
            iOS.</p>
        <p>Cela en fait une API à la popularité croissante chez les développeurs orientés vers la 3D, par exemple dans les jeux vidéo
            et les applications de réalité virtuelle.</p>
    </div>
    <h3>Posts</h3>
    @foreach ($posts as $post)
        <div class="container post">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->contenu }}</p>
            <div class="date">
            <svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.184v-.184c0-1.657-1.343-3-3-3s-3 1.343-3 3h-2c0-1.657-1.343-3-3-3s-3 1.343-3 3v.184c-1.161.415-2 1.514-2 2.816v9c0 1.654 1.346 3 3 3h12c1.654 0 3-1.346 3-3v-9c0-1.302-.839-2.401-2-2.816zm-4-.184c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1v-2zm-8 0c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1v-2zm12 12c0 .551-.448 1-1 1h-12c-.552 0-1-.449-1-1v-6h14v6z"/></svg>
            <p>{{ $post->created_at->format('d/m/Y') }}</p></div>
            <a href="{{ route('blog.view_update', $post->id) }}">Modifier</a>
        </div>
        <br />
    @endforeach
    
        <div style="display: flex; justify-content: center;">
            @auth
                <a href="/blog/new">Nouveau post</a>
            @endauth
            @guest
                <a href="/login">Connectez-vous pour publier un post</a>
            @endguest
        </div>
    
    <br />
    <script src="{{ asset('/js/particles.js') }}"></script>
    @include('partials.footer')
</body>