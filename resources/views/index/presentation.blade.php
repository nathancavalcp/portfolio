<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Présentation</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    @include('partials.header')
    <br/><br/>
    <h3>Présentation</h3>
    <img src="{{ asset('/img/photo.jpeg') }}" alt="Photo" id="photo">
    <p>Je suis Nathan Cava-Lonchamp, un aspirant développeur.</p>
    <p>Je suis un passionné de l'informatique et plus particulièrement de la programmation.</p>
    <hr/>
    <h3>Mes soft skills</h3>
    <p style="text-align: center;">Voici les compétences moins techniques qui me définissent :</p>
    <div class="skill-container">
        @foreach ($skills as $skill)
        <div class="skill">
            <h4>{{ $skill->title }}</h4>
            <p>{{ $skill->description }}</p>
        </div>
        @endforeach
    </div>
    <br/><br/>
    @include('partials.footer')
</body>
</html>