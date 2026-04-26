<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials.header')
    <br/><br/>
    <div class="index">
    <h2>Bienvenue sur mon portfolio !</h2>
    <p>Ce site permet de me présenter et de faire une liste de mes compétences & projets.</p>
    <p>Il contient également un blog où je partage mes réflexions sur le développement web et mes projets en cours.</p>
    <p>Vous pouvez télécharger mon CV pour en savoir plus sur mon parcours et mes expériences.</p>
    </div>
    @if(Auth::user())
        <p>Connecté en tant que : {{ Auth::user()->name }}</p>
    @else
        <p>Déconnecté</p>
    @endif
    <!--NOTE : l'attribut download est incompatible avec Internet Explorer-->
    <a href="{{  asset('/docs/CV_Nathan_Cava.pdf') }}" download="CV_Nathan_Cava-Lonchamp">Télécharger le CV</a>
    <h3>Présentation</h3>
    <div class="index">
        <p>Je suis passionné par l'informatique et le développement web depuis plusieurs années, et j'ai décidé de créer ce portfolio pour partager mes compétences et mes projets avec le monde.</p>
        <p>J'ai acquis de nombreuses compétences en développement web, notamment en PHP, JavaScript, C, Dart, Flutter et Git. J'ai également travaillé sur plusieurs projets personnels et scolaires qui m'ont permis de mettre en pratique ces compétences.</p>
        <p>Je suis toujours à la recherche de nouvelles opportunités pour apprendre et grandir en tant que développeur, et je suis ouvert à toute collaboration ou projet intéressant.</p>
    </div>
    @include('partials.footer')
</body>