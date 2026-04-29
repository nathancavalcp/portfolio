<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projets - {{ $experience->title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    @include('partials.header')
    <br/><br/>
        <h3>{{ $experience->title }}</h3>
        <p style="text-align: center;">{{ $experience->description }}</p>
        <br/><br/>
            @foreach ($experience->projects as $project)
                <div class="container skill">
                    <h4>{{ $project->title }}</h4>
                    <p>{{ $project->description }}</p>
                </div>
                <br/><br/>
            @endforeach
        <br/><br/>
        <div style="display: flex; justify-content: center;">
        <a href="{{ asset ('./docs/' . $project->pdf_link) }}" target="_blank" style="border: 2px solid white; padding: 5px;">Rapport de stage</a>
        </div>
        <br/><br/>
        <script src="{{ asset('/js/particles.js') }}"></script>
    @include('partials.footer')
</body>
</html>