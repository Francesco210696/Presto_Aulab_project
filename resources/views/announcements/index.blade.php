<x-main>
    {{-- @foreach ($announcements as $announcement)
        <a href="{{ route('announcements.show', $announcement) }}"> {{ $announcement->title }}</a>
    @endforeach

    <p>{{ $announcements->links() }}</p> --}}
    @forelse ($announcements as $announcement)
        <div class="col-12 col-md-4 my4">
            <div class="card-shadow" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top p-3 rounded">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->body}}</p>
                    <a href="{{route('category.show',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow-btn btn-success">{{$announcement->category->name}}</a>
                    <p class="card-footer">Pubblicato il: {{$announcement->created_at->format("d/m/Y")}}</p>
                    
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning py-3 shadow">
                <p class="lead">Non ci sono annunci per questa ricerca.</p>
            </div>
        </div>
    @endforelse


</x-main>
