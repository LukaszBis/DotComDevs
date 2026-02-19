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
    <div class="container">

        @auth
            @if(auth()->user()->role === 'admin')
                <div class="blog-actions">
                    <a href="{{ route('blog.create') }}" class="add-post-btn">
                        ➕ Dodaj post
                    </a>
                </div>
            @endif
        @endauth

        <div class="blog-grid">
            @foreach($posts as $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="blog-card-link">
                    <div class="blog-card">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->excerpt }}</p>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>

@endsection
