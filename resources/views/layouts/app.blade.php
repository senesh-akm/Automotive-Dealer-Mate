<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap and compiled CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- Include the navigation bar -->
    @include('layout.navbar.front-navigation-bar')

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS loaded via Vite -->
</body>
</html>
