<header class="site-header">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="brand" aria-label="Strona główna">
            <img src="{{ asset('images/logo.svg') }}" alt="" width="40" height="40">
            <span>{{ config('site.brand_first') }}<strong>{{ config('site.brand_last') }}</strong></span>
        </a>

        <button class="nav-toggle" type="button" aria-label="Otwórz menu" aria-expanded="false" aria-controls="site-nav">
            <span></span><span></span><span></span>
        </button>

        <nav id="site-nav" class="site-nav">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Start</a>
            <a href="{{ route('o-mnie') }}" class="{{ request()->routeIs('o-mnie') ? 'active' : '' }}">O mnie</a>
            <a href="{{ route('oferta') }}" class="{{ request()->routeIs('oferta') ? 'active' : '' }}">Oferta</a>
            <a href="{{ route('kontakt') }}" class="{{ request()->routeIs('kontakt') ? 'active' : '' }}">Kontakt</a>

            @auth
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('panel') }}" class="{{ request()->routeIs('panel*') ? 'active' : '' }}">Panel</a>
                @endif
                <a href="{{ route('logout') }}" class="nav-muted">Wyloguj</a>
            @endauth

            <a href="{{ route('kontakt') }}" class="btn btn-primary btn-sm nav-cta">Napisz do mnie</a>
        </nav>
    </div>
</header>
