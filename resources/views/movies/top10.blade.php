<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Top 10 movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="/movies/{{ $movie->id }}">{{ $movie->name }} {{$movie->rating}}</a>
            </li>
        @endforeach
    </ul>

    <a href="/home"><button>Back home</button></a>
</body>
</html>