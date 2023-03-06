<x-main>
    <div class="container mt-5">
        <h1 class="display-2">
            {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
        </h1>
    </div>

    @if ($announcement_to_check)
        <div class="col-10 mt-1  border border-dark drop-category rounded">
            <div class="card-shadow d-flex mt-1 overflow-auto ">
                @if ($announcement_to_check->images)
                    @foreach ($announcement_to_check->images as $image)
                        <div class="d-block">
                            <img src="{{ Storage::url($image->path) }}" class="rounded me-5">
                        </div>
                    @endforeach
                @endif
                <div>
                    <h5 class="card-title  ">{{ $announcement_to_check->title }}</h5>

                    <p class="card-footer">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                    <p class="btn  mb-5">{{ $announcement_to_check->price }}€</p>
                    <a href="{{ route('category.show', ['category' => $announcement_to_check->category]) }}"
                        class="ms-3 mb-5 btn">{{ $announcement_to_check->category->name }}</a>
                    <p>{{ $announcement_to_check->description }}</p>
                </div>
            </div>

            <div class=" d-flex mt-5 justify-content-center mb-2">
                {{-- bottone accetta   --}}
                <form action="{{ route('revisor.accept_announcement', $announcement_to_check) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn-revisor bg-success shadow" type="submit">Accetta</button>
                </form>
                {{-- bottone rifiuta   --}}
                <form action="{{ route('revisor.reject_announcement', $announcement_to_check) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn-revisor bg-danger shadow ms-5" type="submit">Rifiuta</button>
                </form>
            </div>
        </div>

    @endif

</x-main>
