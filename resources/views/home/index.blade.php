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
    @yield('content')
    
    <div class="logout-buttons">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Logout</button>
        </form>
    </div>
    
    
    <h1 class="welcome">Welcome to IMDb </h1>

    <a href="/movies">List of all movies</a>
    <a href="/movies/top10">Top 10 movies</a>
    <a href="/people">List of all actors</a>
</body>
</html>

