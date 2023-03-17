<x-main>

<div class="container mt-5">
    
    <div class="row g-3">

        @if (session()->has('success'))
        <div class="alert alert-success shadow w-50 my-4 mx-auto text-center ">
            <p>{{session('success')}}</p>
        </div>
        @endif
        <h2>Contattaci</h2>
        <form action="{{ route('saveContact') }}" method="POST">
            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                    @error('name') is-invalid @enderror id="name" aria-describedby="emailHelp">
            </div>
            @error('name')
            <div class="alert alert-danger shadow my-4 py-2">
                <p>{{$message}}</p>
            </div>
                <div class="alert alert-danger shadow my-4 py-2">
                    <p>{{ $message }}</p>
                </div>
            @enderror
    
            <div class="col-12 mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                    @error('email') is-invalid @enderror id="exampleInputEmail" aria-describedby="emailHelp">
                <div class="form-text" id="emailHelp">Non mostreremo la tua email a nessuno. </div>
            </div>
            @error('email')
            <div class="alert alert-danger shadow my-4 py-2">
                <p>{{$message}}</p>
            </div>
                <div class="alert alert-danger shadow my-4 py-2">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            <div class="mb-3">
                <textarea name="message"  cols="30" rows="10" class="form-control"
                    @error('message') is-invalid @enderror placeholder="Scrivi il tuo messaggio">{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn">Invia</button>
        </form>
    </div>


    
</div>

   
</x-main>
