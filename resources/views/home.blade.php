<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
</head>
<body>
    <h1>Welcome to My Portfolio</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('projects') }}">Projects</a> |
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
    <p>This is the homepage of my portfolio website.</p>
</body>
</html>
