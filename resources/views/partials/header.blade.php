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
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    <span> {{ auth()->user()->name }}
                    </span> <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu ml-auto">
                    @if (Gate::allows('access-admin'))
                        @if (auth()->user()->role == 'professeur' || auth()->user()->role == 'admin')
                            <li class="txt-primary">
                                <a class="dropdown-item" href="{{ route('professeur') }}"><svg style="height:30px"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span> {{ __('mon emplois du temps') }} </span></a>
                            </li>
                        @endif
                    @endif
                    <li class="txt-primary"><a class="dropdown-item" href="#">Profil</a>
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