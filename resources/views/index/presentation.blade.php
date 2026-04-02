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
        <div class="skill">
            <h4>Organisation</h4>
            <p>Je suis capable de très bien m'organiser; la gestion et la planification font partie de mes points forts.</p>
        </div>
        <div class="skill">
            <h4>Flexibilité</h4>
            <p>Je sais m'adapter en fonction de mon environnement de travail et j'assimile vite les concepts nécessaires.</p>
        </div>
        <div class="skill">
            <h4>Créativité</h4>
            <p>Je mets un point d'honneur à proposer des idées innovantes et à les mettre en place grâce aux moyens de bord.</p>
        </div>
        <div class="skill">
            <h4>Communication</h4>
            <p>Je sais communiquer efficacement avec mes collègues et peux efficacement travailler en groupe.</p>
        </div>
        <div class="skill">
            <h4>Curiosité</h4>
            <p>Je suis ouvert à toutes sortes de nouvelles technologies et j'aime apprendre de nouvelles choses pour diversifier mes capacités.</p>
        </div>
        <div class="skill">
            <h4>Autonomie</h4>
            <p>Je sais travailler de manière autonome et je suis capable de prendre des décisions importantes.</p>
        </div>
    </div>
    <br/><br/>
    @include('partials.footer')
</body>