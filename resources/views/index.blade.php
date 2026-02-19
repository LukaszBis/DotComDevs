@extends('partials.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush
@section('content')
    @include('partials.nav')
    <section class="info">
        <div class="container">
            <h1>Tworzymy strony i sklepy internetowe</h1>
            <p>
                Twoja firma zasługuje na nowoczesną, estetyczną i skuteczną stronę internetową.
                W <strong>DotCom Devs</strong> projektujemy i wdrażamy witryny oraz sklepy online,
                które nie tylko świetnie wyglądają, ale też realnie wspierają Twój biznes.
            </p>
        </div>
    </section>
    <section class="oferta">
        <div class="container">
            <h2>Nasza oferta</h2>
            <div class="oferta-grid">
                <div class="card">
                    <h3>Strony internetowe</h3>
                    <p>Nowoczesne strony WWW dopasowane do Twoich potrzeb – estetyka, funkcjonalność i wydajność.</p>
                </div>

                <div class="card">
                    <h3>Sklepy internetowe</h3>
                    <p>Tworzymy sklepy na WooCommerce, Shopify i PrestaShop – gotowe do sprzedaży od pierwszego dnia.</p>
                </div>

                <div class="card">
                    <h3>Optymalizacja SEO</h3>
                    <p>Poprawiamy widoczność Twojej strony w Google dzięki optymalizacji technicznej i treściom SEO.</p>
                </div>

                <div class="card">
                    <h3>UX/UI Design</h3>
                    <p>Projektujemy nowoczesne i intuicyjne interfejsy zwiększające konwersję.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="onas">
        <div class="container">
            <h2>O nas</h2>
            <p>
                Jesteśmy <strong>DotCom Devs</strong> – zespołem pasjonatów łączących technologię z kreatywnością.
                Tworzymy strony i sklepy internetowe, które są funkcjonalne, szybkie,
                estetyczne i skuteczne biznesowo.
            </p>

            <ul class="cechy">
                <li>✔ Funkcjonalne i intuicyjne</li>
                <li>✔ Szybkie i responsywne</li>
                <li>✔ Estetyczne i nowoczesne</li>
                <li>✔ Nastawione na konwersję</li>
            </ul>
        </div>
    </section>

@endsection