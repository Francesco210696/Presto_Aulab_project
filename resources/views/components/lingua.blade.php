<form action="{{ route('set_lenguage_locale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="bg-transparent">
        <i class="flag-icon flag-icon-{{ $nation }}"></i>

    </button>

</form>
