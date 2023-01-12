@php
    $hello = 'Hello World';
    $entra = 'Entra Nel Sito';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entra Nel Sito</title>

    <style>
        a {
            color: rgb(139, 130, 0);
            text-decoration: none;
        }

        h1 {
            color: salmon;
        }
    </style>
</head>
<body>
    <h1>{{$hello}}</h1>
    <h1><a href="/Home">{{$entra}}</a></h1>
</body>
</html>