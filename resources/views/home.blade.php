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

    <div class="container">
        <div class="row">
            @forelse ($movies as $key=>$movie)
                <div class="col-4 my-4">
                    <div class="card h-100">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <p class="card-title fs-4 fw-bold">
                                {{ $movie->title }}
                            </p>
                            <p class="card-text">
                                Data uscita:
                                {{ $movie->date }}
                            </p>
                            <p class="card-text">
                                Nazionalita':
                                {{ $movie->nationality }}
                            </p>
                            <p class="card-text">
                                Voto:
                                {{ $movie->vote }} / 10
                            </p>

                        </div>
                    </div>
                </div>
            @empty
                <p>No Movies</p>
            @endforelse
        </div>
    </div>




</body>

</html>
