<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        {{-- test logo --}}
        <div class="primary-logo">
            <a href="{{ route('welcome') }}">
                <img src="\img\Soon_solo_logo.png" alt="Soon.it">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcements.index') }}">Annunci</a>
                </li>
                {{-- categorie --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            @guest
                <ul class="navbar-nav d-flex me-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/register">Register</a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav d-flex me-5">
                    <li class="nav-item me-3"> <a href="{{ route('announcements.create') }}"><button class="btn btn-info">+
                                AGGIUNGI ANNUNCIO</button></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profilo</a></li>
                            <li><a class="dropdown-item" href="#">impostazioni</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                        </ul>
                    </li>
                </ul>

            @endguest
            <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                <input type="search" name="searched" class="form-control me-2" placeholder="Cerca" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
