<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">

                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            {{ $login_register }}
                        </div>
                    </div>
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new email verification link has been emailed to you!
                    </div>
                    <form action="/verify-email">
                        @csrf
                        <p>non hai ricevuto l'email? clicca qui per riprovare</p>
                        <button type="submit"class="btn">Reinvia email</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
