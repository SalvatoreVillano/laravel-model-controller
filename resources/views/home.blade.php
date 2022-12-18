<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movie DB</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <ul>
        @forelse ($movies as $key=>$movie)
            <li>
                {{ $key }} - {{ $movie->title }}
            </li>
        @empty
            <p>No Movies</p>
        @endforelse
    </ul>

</body>

</html>
