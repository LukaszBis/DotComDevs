@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/wycena.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>Darmowa wycena</h1>
        <p>Opisz swój projekt, a przygotujemy ofertę.</p>
    </div>
</section>

<section class="contact">
    <div class="container">
        <form class="wycena-form">
            <input type="text" placeholder="Nazwa firmy" required>
            <input type="email" placeholder="Adres e-mail" required>

            <select>
                <option>Strona internetowa</option>
                <option>Sklep internetowy</option>
                <option>SEO</option>
                <option>UX/UI</option>
            </select>

            <textarea placeholder="Opisz swój projekt" rows="5"></textarea>
            <button type="submit">Wyślij zapytanie</button>
        </form>
    </div>
</section>

@endsection
