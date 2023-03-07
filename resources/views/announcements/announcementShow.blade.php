<x-main>
    <div class="container">

        <div class="mt-5  border border-dark drop-category rounded">
            <div class="card-shadow d-flex mt-1 overflow-auto ">

                @foreach ($announcement->images->all() as $image)
                    <img
                        src="{{ $announcement->images()->get()->isEmpty()? '\img\Soon_solo_logo.png': Storage::url($image->path) }}">
                @endforeach
                <div>
                    <h5 class="card-title  ">{{ $announcement->title }}</h5>

                    <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                    <p class="btn mt-3">{{ $announcement->price }}€</p>
                    <a href="{{ route('category.show', ['category' => $announcement->category]) }}"
                        class="ms-3 btn">{{ $announcement->category->name }}</a>
                    <p>{{ $announcement->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-main>
