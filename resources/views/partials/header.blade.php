<div class="row">
    <header class="container header">
        <nav>
            @if (Request::is('/'))
                <a href="#accueil">Accueil</a>
                <a href="#presentation">Présentation</a>
                <a href="#competences">Compétences</a>
                <a href="#experiences">Expériences</a>
            @else
                <a href="/">Accueil</a>
                <a href="/#presentation">Présentation</a>
                <a href="/#competences">Compétences</a>
                <a href="/#experiences">Expériences</a>
            @endif
            <a href="/blog">Blog</a>
            @guest
                <a href="/login">Connexion</a>
                <!-- <a href="/register">Inscription</a> -->
            @endguest
            @auth
                <a href="/admin">Panneau admin</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth

        </nav>
        @guest
            <p id="welcome">Déconnecté</p>
        @endguest
        @auth
            <p id="welcome">Bienvenue, {{ Auth::user()->name }}</p>
        @endauth
    </header>

</div>
<br /><br />