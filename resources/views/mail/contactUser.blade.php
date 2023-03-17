<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soon|{{ $contact['name'] }}</title>
</head>

<body>
    <div>
        <h2>{{ $contact['name'] }} ha richiesto informazioni riguardo all'articolo che stai vendendo</h2>
        <p>eccco il suo messaggio:</p>
        <p>{{ $contact['message'] }}</p>
    </div>
</body>

</html>

