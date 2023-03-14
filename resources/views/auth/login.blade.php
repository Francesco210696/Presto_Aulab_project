<x-main>
    <x-loginRegisterStructure>
        <x-slot name="login_register">
            <div class="card-front">
                <div class="center-wrap">
                    <div class="section text-center">
                        <!-- login -->
                        <h4 class="mb-4 pb-3">Log In</h4>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <!-- email -->
                                <input type="email" name="email" class="form-style" placeholder="Your Email"
                                    id="email" value="{{old('email')}}">
                                <i class="input-icon uil uil-at"></i>
                                @error('email')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <!-- password -->
                                <input type="password" name="password" class="form-style" placeholder="Your Password"
                                    id="password">
                                <i class="input-icon uil uil-lock-alt"></i>
                                @error('password')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn mt-4">Accedi</button>
                        </form>
                        <p class="mb-0 mt-4 text-center"><a href="/forgot-password" class="link">Forgot your
                                password?</a>
                        </p>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-loginRegisterStructure>









    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Accedi </h1>
                @if (session('status'))
                    <div class="mt-3 alert alert-success font-medium text-sm">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="/login" method="POST">
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
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Accedi</button>
                        </div>

                        <div class="check-box">
                            <a href="/forgot-password" class="form-check">Non ricordi la tua password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</x-main>
