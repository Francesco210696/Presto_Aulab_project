<x-main>
    <x-loginRegisterStructure>
        <x-slot name="login_register">
            <div class="card-front">
                <div class="center-wrap">
                    <div class="section text-center">

                        <!-- register -->
                        <h4 class="mb-4 pb-3">Register</h4>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <!-- name -->
                                <input type="text" name="name" class="form-style @error('name') is-invalid @enderror"
                                    placeholder="Your Full Name" id="name" value="{{old('name')}}">
                                <i class="input-icon uil uil-user"></i>
                                @error('name')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <!-- email -->
                                <input type="email" name="email"
                                    class="form-style @error('email') is-invalid @enderror" placeholder="Your Email"
                                    id="email" value="{{old('email')}}">
                                <i class="input-icon uil uil-at"></i>
                                @error('email')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <!-- password -->
                                <input type="password" name="password"
                                    class="form-style @error('password') is-invalid @enderror"
                                    placeholder="Your Password" id="password">
                                <i class="input-icon uil uil-lock-alt"></i>
                                @error('password')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <!-- password_confirmation-->
                                <input type="password" name="password_confirmation"
                                    class="form-style @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Confirm Your Password" id="password_confirmation">
                                <i class="input-icon uil uil-lock-alt"></i>
                                @error('password_confirmation')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn mt-4">Registrati</button>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-loginRegisterStructure>




    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Registrati</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Username</label>
                            <input type="name" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="password_confirmation">Conferma password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Registrati</button>
                        </div>
                    </div>
                </form>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new email verification link has been emailed to you!
                    </div>
                    <form action="/verify-email">
                        @csrf
                        <p>non hai ricevuto l'email? clicca qui per riprovare</p>
                        <button type="submit"class="btn btn-primary">Reinvia email</button>
                    </form>
                @endif
            </div>
        </div>
    </div> --}}
</x-main>
