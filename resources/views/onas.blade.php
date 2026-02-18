@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/onas.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>O nas</h1>
        <p>Poznaj DotCom Devs i nasze podejście do tworzenia stron internetowych.</p>
    </div>
</section>

<section class="content">
    <div class="container onas-content">
        <h2>Kim jesteśmy?</h2>
        <p>
            Jesteśmy zespołem specjalistów, którzy łączą technologię, design i marketing,
            aby tworzyć skuteczne strony oraz sklepy internetowe.
        </p>

        <h2>Nasza misja</h2>
        <p>
            Tworzyć nowoczesne rozwiązania online, które pomagają firmom rozwijać sprzedaż,
            budować markę i wyróżniać się na rynku.
        </p>

        <h2>Dlaczego my?</h2>
        <ul class="onas-list">
            <li>Indywidualne podejście do każdego projektu</li>
            <li>Nowoczesny design</li>
            <li>Optymalizacja pod SEO</li>
            <li>Wsparcie po wdrożeniu</li>
        </ul>
    </div>
</section>

@endsection
