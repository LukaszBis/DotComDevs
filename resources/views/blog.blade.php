@extends('partials.layout')

@section('title', 'Blog')
@section('meta_description', 'Krótkie wpisy o programowaniu, stronach internetowych, Excelu i nauce informatyki.')

@section('content')

<section class="page-head">
    <div class="container">
        <p class="eyebrow">Blog</p>
        <h1>Notatki o programowaniu i nie tylko</h1>
        <p>Krótkie wpisy o stronach, kodzie, Excelu i nauce informatyki.</p>
    </div>
</section>

<section class="section">
    <div class="container">

        @auth
            @if (auth()->user()->role === 'admin')
                <div class="toolbar">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary btn-sm">+ Dodaj wpis</a>
                </div>
            @endif
        @endauth

        @if ($posts->isEmpty())
            <div class="empty">
                <h2>Jeszcze nic tu nie ma</h2>
                <p>Pierwsze wpisy pojawią się niebawem. W międzyczasie zajrzyj do <a href="{{ route('oferta') }}">oferty</a> albo <a href="{{ route('kontakt') }}">napisz do mnie</a>.</p>
            </div>
        @else
            <div class="grid grid-3">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="card post-card">
                        <time datetime="{{ $post->published_at?->toDateString() }}">{{ $post->published_at?->format('d.m.Y') }}</time>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 140) }}</p>
                        <span class="link">Czytaj dalej</span>
                    </a>
                @endforeach
            </div>
        @endif

    </div>
</section>

@endsection
