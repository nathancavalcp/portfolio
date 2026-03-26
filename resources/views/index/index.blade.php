<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inscription</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials.header')
    
    <a href="/register" class="btn btn-secondary">Register</a>
    <a href="/login" class="btn btn-secondary">Login</a>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @if(Auth::user())
        <p>Connecté en tant que : {{ Auth::user()->name }}</p>
    @else
        <p>Déconnecté</p>
    @endif
    <p>Bienvenue sur mon portfolio !</p>
    <p>Ce site permet de me présenter et de faire une liste de mes compétences & projets.</p>
    
    <!--Faire en sorte de pouvoir télécharger le CV ici-->
    
    @include('partials.footer')
</body>