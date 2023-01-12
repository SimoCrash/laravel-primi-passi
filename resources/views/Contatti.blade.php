@php
    $contatti = 'Contatti';
    $arr = ['Home', 'Chi Siamo', 'Contatti', 'Lavora Con Noi'];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatti</title>

    <style>
        a {
            color: rgb(19, 212, 28);
            text-decoration: none;
        }

        ul {
            display: flex;
            justify-content: space-around;
        }

        li {
            list-style-type: none;
            font-size: 2rem;
        }

        h1 {
            text-align: center;
        }
    </style>
    
</head>
<body>
    <h1>{{$contatti}}</h1>
    <ul>
        @foreach ($arr as $item)
            <li><a href="/{{$item}}">{{$item}}</a></li>
        @endforeach
    </ul>
</body>
</html>