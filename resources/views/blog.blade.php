@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="page-header">
    <div class="container">
        <h1>Blog</h1>
        <p>Wiedza o stronach internetowych, SEO i e-commerce.</p>
    </div>
</section>

<section class="blog">
    <div class="container blog-grid">

        <div class="blog-card">
            <h3>Jak zwiększyć sprzedaż w sklepie internetowym?</h3>
            <p>Sprawdź 5 sprawdzonych sposobów na większą konwersję.</p>
        </div>

        <div class="blog-card">
            <h3>Dlaczego SEO jest ważne?</h3>
            <p>Dowiedz się, jak widoczność w Google wpływa na Twój biznes.</p>
        </div>

    </div>
</section>

@endsection
