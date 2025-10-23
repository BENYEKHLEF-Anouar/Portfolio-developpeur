<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">My Portfolio</a>
        <div>
            <a href="{{ route('home') }}" class="nav-link d-inline text-white">Home</a>
            <a href="{{ route('about') }}" class="nav-link d-inline text-white">About</a>
            <a href="{{ route('projects') }}" class="nav-link d-inline text-white">Projects</a>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
