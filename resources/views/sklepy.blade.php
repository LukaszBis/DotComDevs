@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sklepy.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>Sklepy internetowe</h1>
        <p>Sprzedawaj online skutecznie i bezpiecznie.</p>
    </div>
</section>

<section class="content">
    <div class="container sklepy-content">
        <h2>Platformy</h2>
        <ul class="sklepy-list">
            <li>WooCommerce</li>
            <li>Shopify</li>
            <li>PrestaShop</li>
        </ul>

        <h2>Co zawiera sklep?</h2>
        <ul class="sklepy-list">
            <li>Integracje płatności</li>
            <li>Integracje dostaw</li>
            <li>Optymalizację SEO</li>
            <li>Panel administracyjny</li>
        </ul>
    </div>
</section>

@endsection
