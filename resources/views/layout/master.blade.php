<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="@yield('description')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    @stack('styles')
</head>
<body>
    @yield('svg')

    <main class="d-flex">
        @include('/partials/sidebar')

        <div class="d-flex flex-column align-items-center content">
            @include('/partials/header')
            @yield('content')
            @include('/partials/footer')
        </div>

    </main>
    <script src="{{ asset('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/sidebar.js') }}"></script>
    @stack('scripts')
</body>
</html>
