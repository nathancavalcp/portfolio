<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Compétences</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
</head>

<body>
    @include('partials.header')
    <br/><br/>
    <h3>Compétences techniques</h3>
    <p style="text-align: center;">Vous verrez ici toutes les compétences acquises ainsi que les projets réalisés ayant trait à ces domaines.</p>
    <br/><br/>
    <div class="competence">
        <img src="{{ asset('/img/php.png') }}" alt="PHP" class="competence-logo">
        <h4>PHP</h4>
        <div class="competence-desc">
            <p>le B dans PHP signifie "bon langage de programmation"</p>
        </div>
    </div>
    <div class="competence">
        <img src="{{ asset('/img/js.png') }}" alt="JavaScript" class="competence-logo">
        <h4>JavaScript</h4>
        <div class="competence-desc">
            <p>javascript ceux qui savent : 💀💀💀</p>
        </div>        
    </div>
    <div class="competence">
        <img src="{{ asset('/img/cpp.png') }}" alt="C" class="competence-logo">
        <h4>C</h4>
        <div class="competence-desc">
            <p>C est l'un des langage de tous les temps qui permet de faire des programmes. Chokbar wola.</p>
        </div>
    </div>
    <div class="competence">
        <img src="{{ asset('/img/dart.png') }}" alt="Dart" class="competence-logo">
        <h4>Dart</h4>
        <div class="competence-desc">
            <p>ptdrrrrr ils ont fait un langage qui s'appelle fléchette</p>
        </div>
    </div>
    <div class="competence">
        <img src="{{ asset('/img/flutter.png') }}" alt="Flutter" class="competence-logo">
        <h4>Flutter</h4>
        <div class="competence-desc">
            <p>gta 6 sur mobile flutter edition</p>
        </div>
    </div>
    <div class="competence">
        <img src="{{ asset('/img/git.png') }}" alt="Git" class="competence-logo">
        <h4>Gestion de projet</h4>
        <div class="competence-desc">
            <p>j'adore avoir 3000000000 d'erreurs de merge :D</p>
        </div>
    </div>
    <br/><br/>
    @include('partials.footer')
</body>