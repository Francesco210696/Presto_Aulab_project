<x-main>
    <x-slot name="title">Presto|HomePage</x-slot>

    <div class="container-fluid mt-5 ">
        @if (session('access.denied'))
            <div class="alert alert-danger text-center">{{ session('access.denied') }}</div>
        @endif
        <div class="bg-dark w-100 text-light text-center p-5">
            <h1>{{__('ui.welcome')}}</h1>
            <h5>fai affari dovunque tu sia...! </h5>

        </div>
        <div class="row justify-content-start ms-5">
            @foreach ($announcements as $announcement)
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
            @endforeach
        </div>
    </div>
    </div>
</x-main>
