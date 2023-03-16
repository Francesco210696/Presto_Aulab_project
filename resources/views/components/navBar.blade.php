<nav class="navbar navbar-expand-xl bg-body-tertiary shadow">
    <div class="container-fluid">
        {{-- test logo --}}
        <div class="primary-logo me-2">
            <a href="{{ route('welcome') }}">
                <img src="\img\Soon_solo_logo.png" alt="Soon.it">
            </a>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
                <form action="{{ route('announcements.search') }}" method="GET" class="d-flex">
                    <input type="search" name="searched" class="form-control nav-search me-2"
                        placeholder="{{ __('ui.search') }}" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">{{ __('ui.search') }}</button>
                </form>
            </li>
        </ul>
        <button class="navbar-toggler nav-elements" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <ul class="navbar-nav d-flex me-5">
                <li class="nav-item me-3">
                    <a class=" nav-elements"
                        href="{{ route('announcements.index') }}">{{ __('ui.allAnnouncements') }}</a>
                </li>



                {{-- categorie --}}
                <li class="nav-item dropdown me-3">
                    <a class="dropdown-toggle nav-elements " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu drop-category text-center">
                        @foreach ($categories as $category)
                            <li><a class=" nav-elements"
                                    href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="active me-3 nav-elements" aria-current="page" href="/login">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="active nav-elements me-3" aria-current="page" href="/register">
                            Register
                        </a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav d-flex me-5">

                    <li class="nav-item dropdown me-5">
                        <a class="nav-elements dropdown-toggle  " href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu drop-category text-center ">
                            <li class=" dropdown-item me-3"> <a class="btn me-2" href="{{ route('announcements.create') }}">
                                    AGGIUNGI ANNUNCIO</a>
                            </li>
                            <li>
                                <a class=" dropdown-item nav-elements" href="#">Profilo</a>
                            </li>
                            @if (Auth::user()->is_revisor)
                                <li>
                                    <a class="dropdown-item nav-elements" aria-current="page"
                                        href="{{ route('revisor.index') }}">
                                        Revisione
                                        <span
                                            class="position-absolute  start-100 translate-middle badge rounded-pill bg-danger">
                                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                                            <span class="visually-hidden">
                                                unread messages
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            @endif


                            <li><a class="dropdown-item nav-elements" href="#">impostazioni</a></li>
                            <li>
                                <hr class="dropdown-divider nav-elements">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item nav-elements">Logout</button>
                                </form>
                        </ul>
                    </li>

                </ul>

            @endguest
            <li style="list-style:none" class="nav-item dropdown me-3">
                <a class="nav-elements dropdown-toggle  me-5" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Lingua
                </a>
                <ul class="dropdown-menu drop-category text-center ">
                    <li>
                        <span class="nav-elements">English</span>
                        <x-lingua lang="en" nation="gb" />
                    </li>
                    <li>
                        <span class="nav-elements">Italiano</span>
                        <x-lingua lang="it" nation="it" />
                    </li>
                    <li>
                        <span class="nav-elements">Espaniol</span>
                        <x-lingua lang="es" nation="es" />
                    </li>
                </ul>
            </li>
        </div>
    </div>
</nav>
