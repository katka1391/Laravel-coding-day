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


    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach
    
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="text"> User name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <br>
        <label for="email">Email address:
            <br>
            <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <br>
        <label for="password">Password:
            <br>
            <input type="password" name="password" value="">
        </label>
        <br>
        <label for="password">Repeat the password:
            <br>
            <input type="password" name="password_confirmation" value="">
        </label>
        <br>
        <br>
        <button>Register</button>
    
    </form>
</div>

