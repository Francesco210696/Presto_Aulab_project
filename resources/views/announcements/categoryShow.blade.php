<x-main>
    <div class="container-fluid">
        <div class="row flex-column ms-3 mt-5">

            @forelse ($category->announcements->where('is_accepted', true) as $announcement)
                <div class="col-10 mt-2  border border-dark drop-category rounded">
                    <div class="card-shadow d-flex mt-1 overflow-auto ">
                        <img
                            src="{{ $announcement->images()->get()->isEmpty()? '\img\Soon_solo_logo.png': $announcement->images()->first()->getUrl(300, 300) }}">
                        <div class="ms-5 mt-3 col-4">
                            <h2 class="card-title text-uppercase">{{ $announcement->title }}</h2>

                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('announcements.show', $announcement) }}"
                                class="btn  mb-5">{{ $announcement->price }}€</a>
                            <a href="{{ route('category.show', ['category' => $announcement->category]) }}"
                                class="ms-3 mb-5 btn">{{ $announcement->category->name }}</a>

                        </div>

                        <div class="col-5  border-dark border-start ps-5">
                            <p class="mt-5 text-capitalize">{{ $announcement->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p class="h1">Non sono presenti annunci per questa categoria</p>
                    <p class="h2">Sii tu il primo a pubblicarne uno: clicca qui <a
                            href="{{ route('announcements.create') }}" class="btn btn-primary shadow">+ AGGIUNGI
                            ANNUNCIO</a>
                    </p>
                </div>
            @endforelse
        </div>
    </div>
</x-main>
