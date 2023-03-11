<x-main>
    <div class="container mt-5">
        <h1 class="display-2">
            {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
        </h1>
    </div>

    @if ($announcement_to_check)
        <div class="col-10 mt-1  border border-dark drop-category rounded">
            <div class="card-shadow d-flex mt-1 overflow-auto ">
               
                <div class="row">
                @if ($announcement_to_check->images)
                    @foreach ($announcement_to_check->images as $image)

                        <div class="col-12 col-md-6" >
                            <img src="{{ $image->getUrl(300,300) }}" class="rounded me-5">
                        </div>
                        <div class="col-md-3">
                            <h5 class="tc-accent mt-3">Tags</h5>
                            <div class="p-2">
                                @if($image->labels)
                            @foreach ( $image->labels as $label)
                                <p class="d-inline">{{$label}},</p>
                            @endforeach
                                @endif    
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="tc-accent">Revisione immagini:</h5>
                                <p>Adulti:<span class="{{$image->adult}}"></span></p>
                                <p>Satira<span class="{{$image->spoon}}"></span></p>
                                <p>Violenza<span class="{{$image->violence}}"></span></p>
                                <p>Medicina<span class="{{$image->medical}}"></span></p>
                                <p>Contenuto Ammiccante<span class="{{$image->racy}}"></span></p>
                            </div>
                        </div>
                
                        @endforeach
                        @endif
                    </div>
                <div class="ms-5">
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
