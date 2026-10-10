@extends('partials.layout')

@section('title', 'Nowy wpis')

@section('content')

<section class="page-head page-head-sm">
    <div class="container narrow">
        <a href="{{ route('blog') }}" class="back-link">← Wróć do bloga</a>
        <h1>Nowy wpis</h1>
    </div>
</section>

<section class="section">
    <div class="container narrow">
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-error">Popraw zaznaczone pola.</div>
            @endif

            <form method="POST" action="{{ route('blog.store') }}" class="form">
                @csrf

                <div class="field">
                    <label for="title">Tytuł</label>
                    <input id="title" type="text" name="title" value="{{ old('title') }}" required class="{{ $errors->has('title') ? 'is-invalid' : '' }}">
                    @error('title')<span class="error">{{ $message }}</span>@enderror
                </div>

                <div class="field">
                    <label for="excerpt">Krótki opis <small>(opcjonalnie, pokazuje się na liście)</small></label>
                    <textarea id="excerpt" name="excerpt" rows="3">{{ old('excerpt') }}</textarea>
                    @error('excerpt')<span class="error">{{ $message }}</span>@enderror
                </div>

                <div class="field">
                    <label for="content">Treść</label>
                    <textarea id="content" name="content" rows="14" required class="{{ $errors->has('content') ? 'is-invalid' : '' }}">{{ old('content') }}</textarea>
                    @error('content')<span class="error">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Opublikuj wpis</button>
            </form>
        </div>
    </div>
</section>

@endsection
