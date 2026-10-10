<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="{{ route('home') }}" class="brand">
                <img src="{{ asset('images/logo.svg') }}" alt="" width="40" height="40">
                <span>{{ config('site.brand_first') }}<strong>{{ config('site.brand_last') }}</strong></span>
            </a>
            <p>{{ config('site.tagline') }} Proste strony internetowe, pomoc w projektach i korepetycje z programowania dla studentów i uczniów.</p>
        </div>

        <div>
            <h4>Nawigacja</h4>
            <ul>
                <li><a href="{{ route('o-mnie') }}">O mnie</a></li>
                <li><a href="{{ route('oferta') }}">Oferta</a></li>
                <li><a href="{{ route('kontakt') }}">Kontakt</a></li>
            </ul>
        </div>

        <div>
            <h4>W czym pomagam</h4>
            <ul>
                <li><a href="{{ route('oferta') }}#strony">Strony internetowe</a></li>
                <li><a href="{{ route('oferta') }}#projekty">Projekty na studia</a></li>
                <li><a href="{{ route('oferta') }}#excel">Excel i arkusze</a></li>
                <li><a href="{{ route('oferta') }}#korepetycje">Korepetycje z programowania</a></li>
            </ul>
        </div>

        <div>
            <h4>Kontakt</h4>
            <ul>
                <li><a href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}">{{ config('site.phone') }}</a></li>
                <li><a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></li>
                <li>{{ config('site.area') }}</li>
            </ul>
        </div>
    </div>

    <div class="container footer-bottom">
        <span>© {{ date('Y') }} {{ config('site.brand') }} · {{ config('site.owner') }}</span>
        @guest
            <a href="{{ route('login') }}">Logowanie</a>
        @endguest
    </div>
</footer>
