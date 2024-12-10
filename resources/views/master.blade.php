<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>
