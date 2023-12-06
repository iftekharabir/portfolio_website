<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite(['resources/css/app.css'])
    
    @yield('custom-style')
</head>
<body>
    <header>
        @include('layouts.partials.navbar')
    </header>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="text-center ">
        @include('layouts.partials.footer')
    </footer>

    @vite(['resources/js/app.js'])
</body>
</html>
