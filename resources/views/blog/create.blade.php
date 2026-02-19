@extends('partials.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush
@section('content')

<div class="container">

    <h1>Dodaj post</h1>

    <form method="POST" action="{{ route('blog.store') }}" class="create-form">
        @csrf

        <div class="form-group">
            <label>Tytuł</label>
            <input type="text" name="title">
        </div>

        <div class="form-group">
            <label>Krótki opis</label>
            <textarea name="excerpt" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>Treść</label>
            <textarea name="content" rows="8"></textarea>
        </div>

        <button type="submit" class="submit-btn">Zapisz post</button>

    </form>
</div>
@endsection
