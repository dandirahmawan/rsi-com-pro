<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/icon/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
    <!-- Header -->
    @include('components.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')
    @vite('resources/js/navbar.js')
</body>
</html>
