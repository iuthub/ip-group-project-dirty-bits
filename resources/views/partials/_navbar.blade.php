<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ URL::route('/') }}">Our Hotel Name</a>
        <button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarContent">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <form method="get" action="{{ route('reservations.index') }}">
                        <button type="submit" class="btn nav-link">My Reservation</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="get" action="{{ route('hotels.index') }}">
                        <button type="submit" class="btn nav-link">Hotels</button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('about') }}">About</a>
                </li>
                @if(Auth::check() && (Auth::user()->admin))
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('create') }}">Create</a>
                </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>