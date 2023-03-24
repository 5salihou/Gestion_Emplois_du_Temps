<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-6 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow"><a class="nav-link dropdown-toggle" href="{{ route('home') }}">Accueil</a>
        </li>
        @guest
            @if (Route::has('login'))
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown no-arrow ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Profil
                </a>
                <ul class="dropdown-menu ml-auto">
                    <li class="txt-primary"><a class="dropdown-item" href="#"><span> {{ auth()->user()->name }}
                            </span> <i class="bi bi-chevron-down"></i></a>
                    <li class="txt-primary"><a class="dropdown-item"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                            href="{{ route('logout') }}">Se déconnecter</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            </li>
        @endguest
    </ul>
</nav>
