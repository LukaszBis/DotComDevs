@extends('partials.layout')

@section('title', 'Strony, projekty studenckie i korepetycje z programowania')

@section('content')

<section class="hero">
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>

    <div class="container hero-grid">
        <div class="hero-text">
            <p class="eyebrow">Web developer · pomoc w projektach · korepetycje</p>
            <h1>Cześć, jestem Łukasz. Pomagam ogarnąć <span class="grad-text">programowanie</span> i projekty IT.</h1>
            <p class="lead">
                Robię proste, ładne strony internetowe, pomagam studentom w projektach zaliczeniowych i Excelu,
                a uczniów szkół średnich przygotowuję z informatyki i programowania. Bez stresu, po ludzku.
            </p>
            <div class="hero-actions">
                <a href="{{ route('kontakt') }}" class="btn btn-primary btn-lg">Zgłoś się</a>
                <a href="#uslugi" class="btn btn-ghost btn-lg">Zobacz, co robię</a>
            </div>
            <ul class="hero-points">
                <li>Tłumaczę prostym językiem</li>
                <li>Zdalnie lub na miejscu</li>
                <li>Cena ustalona przed startem</li>
            </ul>
        </div>

        <div class="hero-visual">
            <div class="photo-card">
                <img src="{{ asset('images/lukasz.png') }}" alt="Łukasz Biś" width="320" height="320">
            </div>
            <span class="chip chip-1">PHP / Laravel</span>
            <span class="chip chip-2">JavaScript</span>
            <span class="chip chip-3">SQL</span>
            <span class="chip chip-4">Excel</span>
            <span class="chip chip-5">HTML &amp; CSS</span>
        </div>
    </div>
</section>

<section id="uslugi" class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Oferta</p>
            <h2>W czym mogę Ci pomóc</h2>
            <p>Cztery rzeczy, które robię najczęściej. Jeśli Twój temat nie pasuje do żadnej, i tak napisz.</p>
        </div>

        <div class="grid grid-4">
            <article class="card service">
                <div class="icon icon-a">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M8 21h8"/></svg>
                </div>
                <h3>Strony internetowe</h3>
                <p>Proste, szybkie i responsywne strony: wizytówki, portfolio, strony dla małych firm i projektów. Od pomysłu po wdrożenie.</p>
                <a href="{{ route('oferta') }}#strony" class="link">Szczegóły</a>
            </article>

            <article class="card service">
                <div class="icon icon-b">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M9 7h7M9 11h5"/></svg>
                </div>
                <h3>Projekty na studia</h3>
                <p>Pomoc w projektach zaliczeniowych i inżynierskich: aplikacje webowe, bazy danych, skrypty. Tłumaczę, jak to działa, żebyś spokojnie to obronił.</p>
                <a href="{{ route('oferta') }}#projekty" class="link">Szczegóły</a>
            </article>

            <article class="card service">
                <div class="icon icon-c">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M3 15h18M9 3v18M15 3v18"/></svg>
                </div>
                <h3>Excel i arkusze</h3>
                <p>Formuły, tabele przestawne, wykresy, makra i porządkowanie danych. Na zaliczenie, do pracy dyplomowej albo do codziennej roboty.</p>
                <a href="{{ route('oferta') }}#excel" class="link">Szczegóły</a>
            </article>

            <article class="card service">
                <div class="icon icon-d">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16"/></svg>
                </div>
                <h3>Korepetycje z programowania</h3>
                <p>Dla uczniów szkół średnich i studentów: podstawy programowania, algorytmy, przygotowanie do matury z informatyki i kolokwiów.</p>
                <a href="{{ route('oferta') }}#korepetycje" class="link">Szczegóły</a>
            </article>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Dla kogo</p>
            <h2>Z kim pracuję</h2>
        </div>

        <div class="grid grid-3">
            <div class="card audience">
                <span class="badge badge-a">01</span>
                <h3>Studenci</h3>
                <ul class="check-list">
                    <li>Projekty zaliczeniowe z programowania i baz danych</li>
                    <li>Excel do prac, analiz i prezentacji</li>
                    <li>Przygotowanie do kolokwiów i egzaminów</li>
                </ul>
            </div>

            <div class="card audience">
                <span class="badge badge-b">02</span>
                <h3>Uczniowie szkół średnich</h3>
                <ul class="check-list">
                    <li>Informatyka i programowanie od podstaw</li>
                    <li>Przygotowanie do matury z informatyki</li>
                    <li>Pierwsze własne projekty i pomoc w zadaniach</li>
                </ul>
            </div>

            <div class="card audience">
                <span class="badge badge-c">03</span>
                <h3>Małe firmy i osoby prywatne</h3>
                <ul class="check-list">
                    <li>Prosta strona wizytówka lub portfolio</li>
                    <li>Drobne poprawki i rozwój istniejącej strony</li>
                    <li>Arkusze i automatyzacje w Excelu</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Jak to wygląda</p>
            <h2>Trzy proste kroki</h2>
        </div>

        <ol class="steps">
            <li>
                <span class="step-no">1</span>
                <h3>Piszesz do mnie</h3>
                <p>Przez formularz, maila albo telefon. Opisz krótko, czego potrzebujesz i na kiedy.</p>
            </li>
            <li>
                <span class="step-no">2</span>
                <h3>Ustalamy zakres i cenę</h3>
                <p>Odpisuję z pytaniami, a potem ustalamy, co dokładnie robimy, w jakim terminie i za ile. Bez niespodzianek.</p>
            </li>
            <li>
                <span class="step-no">3</span>
                <h3>Działamy</h3>
                <p>Robię stronę lub projekt, a przy korepetycjach spotykamy się online albo na żywo. Na końcu tłumaczę, jak wszystko działa.</p>
            </li>
        </ol>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Technologie</p>
            <h2>Na czym pracuję</h2>
        </div>
        <ul class="tech-list">
            <li>HTML &amp; CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>Laravel</li>
            <li>MySQL / SQL</li>
            <li>Python</li>
            <li>C++</li>
            <li>Git</li>
            <li>Excel / Google Sheets</li>
            <li>WordPress</li>
        </ul>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band">
            <div>
                <h2>Masz projekt, zaliczenie albo chcesz zacząć programować?</h2>
                <p>Napisz, co Cię czeka. Odpiszę i razem ustalimy, jak to ogarnąć.</p>
            </div>
            <a href="{{ route('kontakt') }}" class="btn btn-light btn-lg">Napisz do mnie</a>
        </div>
    </div>
</section>

@endsection
