<x-main>
    <x-slot name='title'>Recupero password</x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Recupewra password </h1>
                @if (session('status'))
                    <div class="mt-3 alert alert-success font-medium text-sm">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="/forgot-password" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                            @error('email')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Recupera password</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</x-main>
