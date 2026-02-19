<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    <main>
        @yield('content')
    </main>
    
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu ul');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>
@include('partials.footer')
</html>
