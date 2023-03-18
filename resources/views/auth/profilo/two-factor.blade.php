<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row flex-column">
                    <div class="col border rounded">
                        <label class="form-label" for="name">Nome:</label>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="col border rounded">
                        <label class="form-label" for="name">Email:</label>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="col-6 mt-5 text-center">
                    @if (session('status'))
                        <div class="alert alert-success mt-3 mb-0" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($user->two_factor_secret)
                        <div class="alert success">
                            <p class="alert alert-success">ecco il Qr da scannerizzare, ricorda di farlo subito,
                                la prossima volta che accedi ti verrà richiesto il codice di verifica </p>
                            <div class="mt-3 mb-3">
                                {!! $user->twoFactorQrCodeSvg() !!}
                            </div>
                            <p class=" ">
                                Autenticazione a due fattori Attiva.
                                vuoi disattivarla?
                            </p>

                            <form class="g-3" action="{{ route('two-factor.disable') }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn mt-2 bg-danger text-dark">Disattivala Ora</button>

                            </form>
                        </div>
                    @else
                        Vuoi attivare l'autenticazione a due fattori?
                        <form action="{{ route('two-factor.enable') }}" method="POST">
                            @csrf
                            <button class="btn">Attivala Subito</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-main>
