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
    <h3>Présentation</h3>
    <p>Je suis Nathan Cava-Lonchamp, un aspirant développeur.</p>
    <!-- photo ici -->
    <img src="{{ asset('/img/photo.jpeg') }}" alt="Photo">
</body>