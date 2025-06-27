<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mushary - Personal Portfolio</title>

    <!-- Fonts & CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/style-light.css') }}">

    <style>
        .theme-icon-btn {
            background: none;
            border: none;
            font-size: 15px;
            cursor: pointer;
            color: inherit;
        }
    </style>
</head>

<body>
    <main class="main-homepage">
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </main>

    @include('components.scripts')
</body>
</html>
