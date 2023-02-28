<x-main>
    <div class="container mt-5">
        <h1 class="display-2">
            {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
        </h1>
    </div>
    @if ($announcement_to_check)
        {{-- contenuto annuncio --}}
        <p>creare una card con questi parametri</p>
        <p>{{ $announcement_to_check->title }}</p>
        <p>{{ $announcement_to_check->body }}</p>
        <p>{{ $announcement_to_check->price }}</p>
        {{-- bottone accetta  --}}
        <form action="{{ route('revisor.accept_announcement', $announcement_to_check) }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-success shadow" type="submit">Accetta</button>
        </form>
        {{-- bottone rifiuta  --}}
        <form action="{{ route('revisor.reject_announcement', $announcement_to_check) }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-danger shadow" type="submit">Rifiuta</button>
        </form>
    @endif
</x-main>
