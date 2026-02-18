@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/kontakt.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>Kontakt</h1>
        <p>Skontaktuj się z nami – chętnie pomożemy.</p>
    </div>
</section>

<section class="contact">
    <div class="container kontakt-content">
        <form class="kontakt-form">
            <input type="text" placeholder="Imię i nazwisko" required>
            <input type="email" placeholder="Adres e-mail" required>
            <textarea placeholder="Wiadomość" rows="5"></textarea>
            <button type="submit">Wyślij wiadomość</button>
        </form>
    </div>
</section>

@endsection
