<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h2 class="text-center mt-5">{{ $titolo }}</h2>
        <h4 class="text-center py-2">{{ $sottotitolo }}</h4>

        <span>Passi da eseguire:</span>
        <ul class="mt-3">
         @foreach ($lista as $singoloElemento )
             <li> {{ $singoloElemento }}</li>
         @endforeach
        </ul>
    </div>

</body>
</html>
