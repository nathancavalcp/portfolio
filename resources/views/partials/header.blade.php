<header>
    <h1>Mon Site</h1>
    <nav>
        <a href="/">Accueil</a>
        <a href="/presentation">Présentation</a>
        <a href="/blog">Blog</a>
        @guest
            <a href="/login">Connexion</a>
            <a href="/register">Inscription</a>
        @endguest
        @auth
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
    </nav>
</header>