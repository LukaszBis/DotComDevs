@extends('partials.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')

@include('partials.nav')

<section class="single-post">
    <div class="container">

        <h1>{{ $post->title }}</h1>

        <div class="post-meta">
            <span>Opublikowano {{ $post->published_at?->format('d.m.Y') }}</span>
        </div>

        <div class="post-content">
            {!! nl2br(e($post->content)) !!}
        </div>

    </div>
</section>

@endsection
