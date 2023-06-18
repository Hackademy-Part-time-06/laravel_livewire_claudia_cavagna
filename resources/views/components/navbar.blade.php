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
                    <a class="nav-link text-white" href="{{route('tasks.create')}}">
                        <i class="bi bi-plus-lg text-white"></i>
                    </a>
                    <a class="nav-link text-white" href="#">Profilo</a>
                    <a class="nav-link text-white">Info</a>
                </div>
            </div>
        </div>
    </div>
</nav>