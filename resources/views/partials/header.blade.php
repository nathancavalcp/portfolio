<header class="container header">
    <div class="row">
        <nav>
            <a href="/">Accueil</a>
            <a href="/presentation">Présentation</a>
            <a href="/competences">Compétences</a>
            <a href="/blog">Blog</a>
            @guest
                <a href="/login">Connexion</a>
                <a href="/register">Inscription</a>
            @endguest
            @auth
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#">Panneau utilisateur</a>
            @endauth

        </nav>
        @guest
            <p id="welcome">Déconnecté</p>
        @endguest
        @auth
            <p id="welcome">Bienvenue, {{ Auth::user()->name }}</p>
        @endauth
    </div>

</header>
<br /><br />