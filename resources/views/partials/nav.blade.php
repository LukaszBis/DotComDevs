<nav class="menu">
    <a href="{{ route('home') }}" class="logo-link">
        <img src="{{ asset('images/dotcom.png') }}" alt="Logo" width="50px">
        <span class="logo-text">DotCom</span>
    </a>

    <button class="menu-toggle" aria-label="Otwórz menu">
        &#9776;
    </button>
    
    <ul>
        <li><a href="{{ route('onas') }}">O nas</a></li>
        <li><a href="{{ route('zespol') }}">Zespół</a></li>
        <li><a href="{{ route('strony') }}">Strony internetowe</a></li>
        <li><a href="{{ route('sklepy') }}">Sklepy internetowe</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('kontakt') }}">Kontakt</a></li>
        <li><a href="{{ route('wycena') }}" class="btn">Wycena</a></li>
        @auth
            <li class="login-desktop"><a href="{{ route('logout') }}" class="login-btn">Wyloguj</a></li>
        @endauth
        @guest
            <li class="login-desktop"><a href="{{ route('login') }}" class="login-btn">Zaloguj</a></li>
        @endguest
    </ul>
</nav>