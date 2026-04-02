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
    <p>Vous verrez ici toutes les compétences acquises ainsi que les projets réalisés ayant trait à ces domaines.</p>
    <br/><br/>
    <div class="competence">
        <h4>PHP</h4>
    </div>
    <div class="competence">
        <h4>JavaScript</h4>
    </div>
    <div class="competence">
        <h4>C</h4>
    </div>
    <div class="competence">
        <h4>Dart</h4>
    </div>
    <div class="competence">
        <h4>Flutter</h4>
    </div>
    @include('partials.footer')
</body>