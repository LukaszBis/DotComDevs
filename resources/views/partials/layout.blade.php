<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Strony internetowe, projekty i korepetycje z programowania') · {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', 'Proste strony internetowe, pomoc w projektach studenckich i Excelu oraz korepetycje z programowania i informatyki dla uczniów i studentów.')">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <meta property="og:title" content="{{ config('site.brand') }} · {{ config('site.tagline') }}">
    <meta property="og:image" content="{{ asset('images/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @stack('styles')
</head>
<body>
    @include('partials.nav')

    <main id="main">
        @yield('content')
    </main>

    @include('partials.footer')

    @if (session('status'))
        <div class="toast" role="status">{{ session('status') }}</div>
    @endif

    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
