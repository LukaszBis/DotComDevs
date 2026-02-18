<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    @stack('styles')
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }
        /* Przycisk Wycena */
        .menu .btn {
            background: #00c3ff;
            padding: 8px 18px;
            border-radius: 30px;
            color: #111;
            font-weight: 600;
        }

        .menu .btn:hover {
            background: white;
            color: #111;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        section {
            padding: 80px 0;
        }

        .info {
            text-align: center;
            background: #f5f7fa;
        }

        .info h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .info p {
            font-size: 18px;
            color: #555;
            max-width: 700px;
            margin: auto;
        }
    </style>
</head>
<body>
    @yield('content')
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu ul');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
