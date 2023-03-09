<x-main>
    <x-slot name="title">Presto|HomePage</x-slot>

    <div class="container-fluid mt-5 ">
        @if (session('access.denied'))
            <div class="alert alert-danger text-center">{{ session('access.denied') }}</div>
        @endif
        
        <div class="row ">
            <div class="col-12">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col">
                            <a class=" nav-elements " href="{{ route('category.show', $category) }}">
                                <div class="row justify-content-between m-2 text-center category-home-buttons ">
                                    <div class="col-12">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-12">
                                        {{ $category->name }}
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- @foreach ($announcements as $announcement)
                <div class="col-12 col-lg-4 my-4 mx-4 card-width">
                    <div class="card card-theme">
                        <img src="{{ $announcement->images()->get()->isEmpty() ? '\img\Soon_solo_logo.png' :$announcement->images()->first()->getUrl(300,300) }}"
                            class="rounded me-5 w-100 img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text fw-bold">{{ $announcement->price }} €</p>
                            <div class="row text-center ">
                                <div class="col-12 ">
                                    <a href="" class="btn  shadow">Visualizza</a>
                                </div>
                                <div class="col-12 mt-2">
                                    <a href="{{ route('category.show', $announcement->category) }}"
                                        class="ms-1 mb-3  shadow btn">{{ $announcement->category->name }}</a>
                                </div>
                            </div>
                            <p class="card-footer">Pubblicato il:
                                {{ $announcement->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
        <div class="w-100 text-light text-center p-5 mt-5">
            <h1>{{ __('ui.welcome') }}</h1>
            <h5>fai affari dovunque tu sia...! </h5>

        </div>
    </div>
    </div>
</x-main>
