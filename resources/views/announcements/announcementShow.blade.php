<x-main>
    <div class="container mt-5">

        <div class="row">
            <div class="col-12">

                <div class="row border border-light mb-5 p-3 shadow">
                    <div class="col">
                     @foreach ($announcement->images->all() as $image)
                        <img class="mt-2 me-2 shadow"
                            src="{{ $image->get()->isEmpty() ? '\img\Soon_solo_logo.png' : $image->getUrl(300, 300) }}">
                    @endforeach   
                    </div>
                    
                </div>

                <div class="col-12 bg-light text-center p-5">
                    <div>
                        <h5 class="text-uppercase fw-bold">{{ $announcement->title }}</h5>
                        <p class="btn mt-3 ">{{ $announcement->price }}€</p>
                        <p class="small">Pubblicato il: <span
                                class="fw-semibold">{{ $announcement->created_at->format('d/m/Y') }}</span> da: <span
                                class="fw-semibold">{{ $announcement->user->name }}</span></p>
                        <p>Descrizione:</p>
                        <p>{{ $announcement->description }}</p>
                    </div>
                    <div class="mt-5">
                        <p>SCRIVIGLI UNA MAIL:</p>
                        <form action="{{ route('contactUser', $announcement->user->email) }}" method="POST">
                            @csrf
                            <div class="col-12 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    @error('name') is-invalid @enderror id="name" aria-describedby="emailHelp">
                            </div>
                            @error('name')
                                <div class="alert alert-danger shadow my-4 py-2">
                                    <p>{{ $message }}</p>
                                </div>
                                <div class="alert alert-danger shadow my-4 py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <div class="col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                    @error('email') is-invalid @enderror id="exampleInputEmail"
                                    aria-describedby="emailHelp">
                                <div class="form-text" id="emailHelp">Non mostreremo la tua email a nessuno. </div>
                            </div>
                            @error('email')
                                <div class="alert alert-danger shadow my-4 py-2">
                                    <p>{{ $message }}</p>
                                </div>
                                <div class="alert alert-danger shadow my-4 py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                            <div class="mb-3">
                                <textarea name="message" cols="30" rows="10" class="form-control" @error('message') is-invalid @enderror
                                    placeholder="Scrivi il tuo messaggio">{{ old('message') }}</textarea>
                            </div>
                            <button type="submit" class="btn">Invia</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>




</x-main>
