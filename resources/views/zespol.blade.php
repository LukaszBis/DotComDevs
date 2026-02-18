@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/zespol.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>Nasz zespół</h1>
        <p>Poznaj osoby stojące za projektami DotCom Devs.</p>
    </div>
</section>

<section class="team">
    <div class="container team-grid">

        <div class="team-card">
            <img src="{{ asset('images/lukasz.png') }}" alt="Łukasz Biś">
            <h3>Łukasz Biś</h3>
            <p>CEO / Web Developer</p>
        </div>

        <div class="team-card">
            <img src="{{ asset('images/damian.png') }}" alt="Damian Kostek">
            <h3>Damian Kostek</h3>
            <p>UX/UI Designer</p>
        </div>

    </div>
</section>

@endsection
