<x-main>
    <div class="container-fluid">
        <div class="row flex-column ms-5 mt-5">

            @forelse ($category->announcements->where('is_accepted', true) as $announcement)
                <div class="col-10 mt-1  border border-dark drop-category rounded">
                    <div class="card-shadow d-flex mt-1 overflow-auto ">
                        <img src="{{ $announcement->images()->get()->isEmpty() ? '\img\Soon_solo_logo.png' : Storage::url($announcement->images()->first()->path) }}">
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
