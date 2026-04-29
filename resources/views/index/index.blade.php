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
    <div class="gradient-sphere sphere-1"></div>
    <div class="gradient-sphere sphere-2"></div>
    <div class="gradient-sphere sphere-3"></div>
    <div class="gradient-sphere sphere-4"></div>
    <div class="glow"></div>
    <div class="particles-container" id="particles-container"></div>
    <br /><br />
    <div class="name">
        <h1 class="name-text">NATHAN CAVA-LONCHAMP</h1>
    </div>
    <section id="accueil">
        @include('partials.header')
        <div class="index">
            <h2>Bienvenue sur mon portfolio !</h2>
            <p>Ce site permet de me présenter et de faire une liste de mes compétences & projets.</p>
            <p>Il contient également un blog où je partage mes réflexions sur le développement web et mes projets en
                cours.</p>
            <p>Vous pouvez télécharger mon CV pour en savoir plus sur mon parcours et mes expériences.</p>
        </div>
        <!--NOTE : l'attribut download est incompatible avec Internet Explorer-->
        <div style="display: flex; justify-content: center; flex-direction: row; gap: 10px;">
            <a href="{{  asset('/docs/CV_Nathan_Cava.pdf') }}" target="_blank" style="border: 1px solid white; padding: 5px;">Voir le CV</a>
            <a href="{{  asset('/docs/CV_Nathan_Cava.pdf') }}" download="CV_Nathan_Cava-Lonchamp"
                style="border: 1px solid white;">Télécharger le CV</a>
        </div>
    </section>
    <br /><br />
    <section id="presentation">
        <h2>Présentation</h2>
        <div class="container" style="max-width: 800px; gap: 10px; padding: 50px;">
            <img src="{{ asset('/img/photo.jpeg') }}" alt="Photo" id="photo">
            <div class="container no-bg" style="text-align: center;">
                <p>Je suis Nathan Cava-Lonchamp, un aspirant développeur. Je suis passionné par l'informatique et le
                    développement depuis plusieurs années, et ce portfolio est
                    là pour partager cette passion par le biais de mes réalisations.<br /><br />
                    J'ai acquis de nombreuses compétences en développement web, notamment en PHP, JavaScript, C,
                    Dart,
                    Flutter et Git. J'ai également travaillé sur plusieurs projets personnels et scolaires qui m'ont
                    permis de mettre en pratique ces compétences.<br /><br />
                    Je suis toujours à la recherche de nouvelles opportunités pour apprendre et m'améliorer en tant que
                    développeur, et je suis ouvert à toute collaboration ou projet intéressant.</p>
            </div>
        </div>
    </section>
    <br /><br />
    <h2>Mes <em>soft skills</em></h2>
    <p style="text-align: center;">Voici les compétences moins techniques qui me définissent :</p>

    <div class="container" style="max-width: 1000px;">
        <div class="skill-container">
            @foreach ($skills as $skill)
                <div class="container skill">
                    <h4>{{ $skill->title }}</h4>
                    <p>{{ $skill->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <br /><br />
    <section id="competences">
        <h2>Compétences techniques</h2>
        <p style="text-align: center;">Vous verrez ici toutes les compétences acquises ainsi que les projets
            réalisés
            ayant trait à ces domaines.<br />
        </p>
        <br /><br />
        @foreach ($techs as $tech)
            <div class="container competence">
                <img src="{{ asset($tech->icon) }}" alt="{{ $tech->title }}" class="competence-logo">
                <h4>{{ $tech->title }}</h4>
                <div class="competence-desc">
                    <p>{{ $tech->description }}</p>
                </div>
            </div>
            <div style="display: flex; justify-content: center; margin: auto;"> 
            <a href="{{ route('index.detail_competence', $tech->id) }}" class="competence-link" style="border: 1px solid white;">Plus de détails sur {{ $tech->title }}</a>
            </div>
            <br/>
        @endforeach
        <br/>
        <h3>Outils maîtrisés</h3>
        <div class="container" style="max-width: 1000px;">
        <div class="skill-container tools">
            @foreach ($tools as $tool)
                <div class="container skill">
                    <h4>{{ $tool->title }}</h4>
                    <img src="{{ asset($tool->icon) }}" alt="{{ $tool->title }}" style="width: 100px; height: 100px;">
                </div>
            @endforeach
        </div>
        </div>
    </section>
    <br /><br />
    <section id="experiences">
        <h2>Expériences</h2>
        <p style="text-align: center;">Vous trouverez ici une liste de mes expériences professionnelles et
            scolaires,
            ainsi que les projets réalisés dans le cadre de ces expériences.</p>
        <br /><br />
        <h3>Stages de BTS SIO</h3>
        <div class="container vulkan">
            <img src="{{ asset('/img/kel.png') }}" alt="Logo KEL" style="max-width: 200px; max-height: 200px;">
            <p>Le groupe KEL, basé à Embrun, est une entreprise spécialisée dans la conception de logiciels pour syndics de copropriété et autres particuliers dans le secteur de l'immobilier.</p>
            <p>C'est au sein de cette entreprise que j'ai eu l'occasion d'effectuer mes deux stages d'apprentissage au cours de ma formation.</p>
            
        </div>
        <br/>
        @foreach ($experiences as $experience)
            <div class="container experience">
                <h4>{{ $experience->title }}</h4><br />
                <p>{{ $experience->description }}</p>
                <a href="{{ route('index.detail_experience', $experience->id) }}">Plus de détails</a>
            </div>
            <br/>
        @endforeach
    </section>
    <br /><br />
    <script src="{{ asset('/js/particles.js') }}"></script>
    @include('partials.footer')
</body>