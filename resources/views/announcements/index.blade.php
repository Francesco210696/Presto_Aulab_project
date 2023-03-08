<x-main>
    {{-- @foreach ($announcements as $announcement)
        <a href="{{ route('announcements.show', $announcement) }}"> {{ $announcement->title }}</a>
    @endforeach

    <p>{{ $announcements->links() }}</p> --}}
    <div class="container-fluid">
        <div class="row flex-column ms-5 mt-5">

            @forelse ($announcements as $announcement)
                <div class="col-10 mt-1  border border-dark drop-category rounded">
                    <div class="card-shadow d-flex mt-1 overflow-auto ">
                        <img
                            src="{{ $announcement->images()->get()->isEmpty()? '\img\Soon_solo_logo.png': $announcement->images()->first()->getUrl(300,300)}}"class="rounded me-5 img-fluid">
                        <div>



                            <h5 class="card-title  ">{{ $announcement->title }}</h5>

                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('announcements.show', $announcement) }}"
                                class="btn  mb-5">{{ $announcement->price }}€</a>
                            <a href="{{ route('category.show', ['category' => $announcement->category]) }}"
                                class="ms-3 mb-5 btn">{{ $announcement->category->name }}</a>
                            <p>{{ $announcement->description }}</p>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Non ci sono annunci per questa ricerca.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>


</x-main>
