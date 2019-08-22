<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/fav.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BooringTech Management @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        @include('includes.manage.managenav')
        @include('includes.manage.managesidenav')

    <div class="management-area" id="app">
        <main class="py-4">
            @yield('content')
        </main>

        {{-- @include('includes.managefoot') --}}
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('includes.notifications.toast')
    @yield('scripts')
</body>
</html>
