<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All movies in IMDb database</h1>

    <form action="/movies" method="get">

        Search for your movie here: 
        <input type="text" name="search" id="search">
    
        
        <input type="submit" value="Search">
        
    </form>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="/movies/{{ $movie->id }}">{{ $movie->name }}</a>
            </li>
        @endforeach

    </ul>
</body>
</html>