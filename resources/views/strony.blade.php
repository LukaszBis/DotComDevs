@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/strony.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>Strony internetowe</h1>
        <p>Nowoczesne witryny dopasowane do Twojej firmy.</p>
    </div>
</section>

<section class="content">
    <div class="container strony-content">
        <h2>Co oferujemy?</h2>
        <ul class="strony-list">
            <li>Strony firmowe</li>
            <li>Landing page</li>
            <li>Strony usługowe</li>
            <li>Optymalizacja szybkości</li>
        </ul>

        <h2>Dlaczego warto?</h2>
        <p>
            Tworzymy szybkie, responsywne i zoptymalizowane strony,
            które pomagają budować profesjonalny wizerunek w sieci.
        </p>
    </div>
</section>

@endsection
