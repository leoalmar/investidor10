<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <style>
            .news-card {
                height: 250px;
            }
        </style>
    </head>
    <body>

    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route("home") }}">
                <img src="https://via.placeholder.com/50x50" alt="Logo">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("home") }}">Show news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("news-create") }}">Add news</a>
                </li>
            </ul>
            <form class="d-flex" method="get" action="{{ route("home") }}">
                @CSRF
                <input class="form-control me-2" id="q" name="q" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-light py-3 fixed-bottom">
        <div class="container text-center">
            <p>© 2023 | Leonardo Araújo</p>
        </div>
    </footer>

    </body>
</html>
