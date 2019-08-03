<nav class="navbar navbar-expand-md main-nav">
    <!-- Brand -->
    <a class="navbar-brand" href="/">
        <img class="main-nav_logo" src="{{asset('/images/victoria-orange.png')}}" alt="Logo">
    </a>

    <!-- Collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
        </span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link main-nav_link" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link main-nav_link" href="{{ route('register') }}">Regístrate</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link main-nav_link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div> 
</nav>