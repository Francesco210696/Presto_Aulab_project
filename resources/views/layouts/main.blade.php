<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite(['resources\css\app.css', 'resources\js\app.js'])
    <title>{{ $title ?? 'Soon.it' }}</title>
</head>

<body>
    <header>
        <x-navBar />

    </header>
    {{ $slot }}
    <x-footer />

    @livewireScripts
</body>

</html>
