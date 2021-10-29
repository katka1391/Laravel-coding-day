<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3>More about movie</h3>
    <h1>{{$movies->name}}</h1>

    <p>Movie rating: <strong>{{$movies->rating}}</strong> </p>
    <p>Number of votes so far: <strong> {{$movies->votes_nr}} </strong></p>

    <h3>Genres:</h3>

    <ul>
        @foreach ($movies->genres as $g)
        <li>
            <a href="#">{{$g->name}}</a>
        </li>
    @endforeach
    </ul> 

    <h3>Languages:</h3>

    <ul>
        @foreach ($movies->languages as $language)
        <li>
            <a href="#">{{$language->name}}</a>
        </li>
    @endforeach
    </ul> 
    
    <h3>List of the actors:</h3>

    <ul>
        @foreach ($movies->people as $person)
        <li>
            <a href="/people/{id}">{{$person->fullname}}</a>
        </li>
    @endforeach
    </ul> 



    <a href="/movies"><button>Back to movies</button></a>
</body>
</html>