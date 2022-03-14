<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('story') }}">Story</a>
            </li>
        </ul>
    </header>
    <h1>Benvenuti alla pagina di {{$nome}} {{$cognome}} </h1>
</body>

</html>