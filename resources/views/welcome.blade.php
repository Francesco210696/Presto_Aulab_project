<x-main>
    <x-slot name="title">Presto|HomePage</x-slot>

    <div class="container mt-5 ">
        <h1>Presto.it</h1>
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
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main>
