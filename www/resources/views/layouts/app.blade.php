<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

</head>

<body>
    <div id="container">
        <!-- Header -->
        <header>
            @include('partials.header')
        </header>

        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            @include('partials.footer')
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>