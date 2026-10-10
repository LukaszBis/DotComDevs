@extends('partials.layout')

@section('title', $post->title)
@section('meta_description', $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 150))

@section('content')

<section class="page-head page-head-sm">
    <div class="container narrow">
        <a href="{{ route('blog') }}" class="back-link">← Wszystkie wpisy</a>
        <h1>{{ $post->title }}</h1>
        <p class="post-meta">Opublikowano {{ $post->published_at?->format('d.m.Y') }}</p>
    </div>
</section>

<section class="section">
    <article class="container narrow prose">
        {!! nl2br(e($post->content)) !!}
    </article>
</section>

@endsection
