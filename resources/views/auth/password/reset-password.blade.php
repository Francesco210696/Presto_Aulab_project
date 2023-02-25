<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Reimposta password </h1>
                <form action="/reset-password" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    <input type="hidden" name="email" id="email" value="{{ request()->route('token') }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="password">Nuova Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="password_confirmation">Conferma la nuova password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control">
                            @error('password_confirmation')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Reset password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
