<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>About Me</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('projects') }}">Projects</a> |
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
    <p>Hi, I'm Ahmad Lukman, a web developer...</p>
</body>
</html>
