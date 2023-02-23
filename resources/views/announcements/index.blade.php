<x-main>
    @foreach ($announcements as $announcement)
        <a href="{{ route('announcements.show', $announcement) }}"> {{ $announcement->title }}</a>
    @endforeach

    <p>{{ $announcements->links() }}</p>


</x-main>
