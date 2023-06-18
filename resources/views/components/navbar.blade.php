<nav class="navbar navbar-expand-lg bg-dark shadow">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{route('homepage')}}">
            <i class="bi bi-house-fill text-white"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success text-white" type="submit">
                <i class="bi bi-search text-white"></i>
            </button>
        </form>
        <div class="justify-content-end me-5">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    
                    
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('tasks.index')}}">Profilo</a></li>
                            <hr>
                            <li><a class="dropdown-item"href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>

                            <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <a class="nav-link text-white" href="{{route('tasks.create')}}">
                        <i class="bi bi-plus-lg text-white"></i>
                    </a>

                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto utente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        </ul>
                    </li>
                    @endauth
                    
                    
                    {{--<a class="nav-link text-white">Info</a>--}}
                </div>
            </div>
        </div>
    </div>
</nav>