<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All actors in IMDb database</h1>

    <form action="/people" method="get">

        Search for your actor here: 
        <input type="text" name="search" id="search">
    
        
        <input type="submit" value="Search">
        
    </form>

    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person->fullname }}
                {{-- <a href="/people/{{ $person->id }}">{{ $person->fullname }}</a> --}}
            </li>
        @endforeach

    </ul>
</body>
</html>