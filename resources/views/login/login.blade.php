<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-form">
    <form action="{{ route('login') }}" method="post">
        @csrf
            <label for="email">Email Address:
                <br>
                <input type="email" name="email" value="{{ old('email') }}">
            </label>
            <br>
            <label for="password">Password:
                <br>
                <input type="password" name="password" value="">
            </label>
            <br>
            <br>
            <button>Login</button>
    </form>
</div>

    
</body>
</html>



