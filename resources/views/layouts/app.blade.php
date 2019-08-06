<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Booring Tech') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            {{-- Main app navigation --}}
            <nav class="navbar has-shadow is-spaced">
                    <div class="navbar-brand">
                      <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/logo.png')}}">
                      </a>

                      <a role="button" class="navbar-burger burger" data-target="navbarMain">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                      </a>
                    </div>

                    <div id="navbarMain" class="navbar-menu">
                      <div class="navbar-start">
                        <a class="navbar-item">
                          Read
                        </a>

                        <a class="navbar-item">
                          Discuss
                        </a>

                        <a class="navbar-item">
                            Share
                        </a>
                      </div>

                      <div class="navbar-end">
                        @if (!Auth::guest())
                            <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-primary">
                                <strong>Sign up</strong>
                                </a>
                                <a class="button is-light">
                                Log in
                                </a>
                            </div>
                            </div>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                  Hey User
                                </a>
                                <div class="navbar-dropdown is-right is-boxed">
                                    <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                                     Profile
                                    </a>
                                    <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                                     Notifications
                                    </a>
                                    <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                                     Settings
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                                     Logout
                                    </a>
                                </div>
                            </div>
                        @endif
                      </div>
                    </div>
                  </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
