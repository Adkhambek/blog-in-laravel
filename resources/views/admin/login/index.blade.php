<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
        crossorigin="anonymous"
    />
</head>
<body>
<x-success-message/>
<x-error-message/>
<div class="login">
    <h1 class="login-title">Login</h1>
    <form action="/login" method="POST" class="login-form">
        @csrf
        <label>
            <p>Username:</p>
            @error('username')
            <p class="error-message">{{$message}}</p>
            @enderror
            <input type="text" name="username" class="login-username input" autocomplete="off" />
        </label>
        <label>
            <p>Password:</p>
            @error('password')
            <p class="error-message">{{$message}}</p>
            @enderror
            <input type="password" name="password" class="login-password input" autocomplete="off" />

        </label>
        <button type="submit" class="login-button">Login</button>
    </form>
</div>
<script src="/js/login.js"></script>
</body>
</html>

