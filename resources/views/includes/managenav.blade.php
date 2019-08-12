<nav class="navbar has-shadow is-fixed-top">
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
            <div class="navbar-item"></div>
            {{-- <a class="navbar-item">
                <h1 class="title is-5">Read</h1>
            </a>

            <a class="navbar-item">
                <h1 class="title is-5">Discuss</h1>
            </a>

            <a class="navbar-item">
                <h1 class="title is-5">Share</h1>
            </a> --}}
            </div>

            <div class="navbar-end">
                @guest
                    <a href="{{route('login')}}" class="navbar-item is-tab is-primary">Login</a>
                    <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Hey {{Auth::user()->name}}</a>
                        <div class="navbar-dropdown is-right" >
                            <a href="#" class="navbar-item">
                                <span class="icon">
                                    <i class="fa fa-fw fa-user-circle-o" style="margin-right:10px"></i>
                                </span>Profile
                            </a>
                            <a href="#" class="navbar-item">
                                <span class="icon">
                                    <i class="fa fa-fw fa-bell" style="margin-right:10px"></i>
                                </span>Notifications
                            </a>
                            @if (Laratrust::hasRole('superadministrator|administrator|editor|author|contributor'))
                                <a href="#" class="navbar-item">
                                    <span class="icon">
                                        <i class="fa fa-pencil" style="margin-right:10px"></i>
                                    </span>Create
                                </a>
                            @endif
                            <hr class="navbar-divider">
                            @if (Laratrust::hasRole('superadministrator|administrator'))
                                <a href="{{route('manage.dashboard')}}" class="navbar-item">
                                    <span class="icon">
                                        <i class="fa fa-fw fa-cog" style="margin-right:10px"></i>
                                    </span>Manage
                                </a>
                            @endif
                            <hr class="navbar-divider">
                            <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <span class="icon">
                                    <i class="fa fa-fw fa-sign-out" style="margin-right:10px"></i>
                                </span>
                            Logout
                            </a>
                            @include('includes.logout')
                        </div>
                    </div>
                @endguest
            </div>
        </div>
      </nav>
