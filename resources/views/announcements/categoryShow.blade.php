<x-main>
    <div class="container mt-5">

        @forelse ($category->announcements->where('is_accepted', true) as $announcement)
            <div>
                <h5>{{ $announcement->title }}</h5>
                <p>{{ $announcement->description }}</p>
                <p>Autore: {{ $announcement->user->name ?? '' }}</p>
                <p>{{ $announcement->price }}</p>
            </div>
        @empty
            <div>
                <p class="h1">Non sono presenti annunci per questa categoria</p>
                <p class="h2">Sii tu il primo a pubblicarne uno: clicca qui <a
                        href="{{ route('announcements.create') }}" class="btn btn-primary shadow">+ AGGIUNGI ANNUNCIO</a>
                </p>
            </div>
        @endforelse
    </div>
</x-main>
