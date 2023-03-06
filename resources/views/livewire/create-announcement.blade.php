<div>
    <h1>CREA IL TUO ANNUNCIO</h1>
    <form wire:submit.prevent="save">
        @csrf
        <div class="row g-3">
            {{-- CATEGORIA --}}
            <label for="category">Categoria</label>
            <select name="category" id="category" class="form-control" wire:model.lazy="category">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                    <option value=" {{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
            {{-- TITOLO --}}
            <div class="col-12">
                <label for="title">title</label>
                <input type="text" name="title" id="title"
                    class="form-control  @error('title') is-invalid @enderror" wire:model.lazy="title"
                    placeholder="titolo dell'annuncio">
                @error('title')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            {{-- PREZZO --}}
            <div class="col-12">
                <label for="price">Price</label>
                <input type="number" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" wire:model.lazy="price"
                    placeholder="prezzo dell'oggetto in vendita">
                @error('price')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            {{-- DESCRIZIONE --}}
            <div class="col-12">
                <label for="description">Description</label>
                <textarea type="text" name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" wire:model.lazy="description"
                    placeholder="scrivi qui la tua descrizione"></textarea>
                @error('description')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            {{-- IMMAGINI --}}
            <div class="col-12">
                <input wire:model="temporary_images" type="file" name="images" multiple
                    class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                @error('temporary_images.*')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
            @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>Photo Preview:</p>
                        <div class="row border border-4 border-info rounded shadow py-4">
                            @foreach ($images as $key => $image)
                                <div class="col my-3">
                                    <div class="img-preview mx-auto shadow rounded"
                                        style="background-image: url({{ $image->temporaryUrl() }});"></div>
                                    <button type="button" class="btn shadow"
                                        wire:click="removeImage({{ $key }})">Cancella</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            {{-- BOTTONE --}}

            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-info shadow"> Salva </button>
                    </div>
                    <div class="col-6">
                        @if (session()->has('success'))
                            <span class="text-success">{{ session('success') }}</span>
                        @endif
                    </div>
                </div>
            </div>
    </form>

</div>
