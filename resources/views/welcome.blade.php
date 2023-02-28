<x-main>
    <x-slot name="title">Presto|HomePage</x-slot>

    <div class="container mt-5 ">
        @if (session('access.denied'))
            <div class="alert alert-danger text-center">{{ session('access.denied') }}</div>
        @endif
        <div class="text-center">
            <img src="\img\Soon_solo_logo.png" class="img-fluid w-25" alt="">
        </div>
        <div class="row g-3">

            <div class="col-12">
                <div class="row g-3">
                    @foreach ($categories as $category)
                        <div class="col-md-4 col-lg-2 me-3 text-center personalCategory mt-5">
                            <a href="{{ route('category.show', $category) }}"><img
                                    src="https://picsum.photos/200?random" class="img-fluid rounded-circle "
                                    alt="">
                                <h5 class="h5-category-custom">{{ $category->name }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <hr class="mt-5">
        <div class="col-12">
            <div class="row">
                @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-4 my-4">
                        <div class="card shadow">
                            <img src="https://picsum.photos/200/" alt="" class="card-img-top p-3 rounded">
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="card-text">{{ $announcement->description }}</p>
                                <p class="card-text fw-bold">{{ $announcement->price }} €</p>
                                <a href="" class="btn btn-primary shadow">Visualizza</a>
                                <a href=""
                                    class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{ $announcement->category->name }}</a>
                                <p class="card-footer">Pubblicato il:
                                    {{ $announcement->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-main>
