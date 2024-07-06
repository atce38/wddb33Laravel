<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Lecture 2</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Abiding Tech Computer Education</a>
            <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact US</a></li>
                </ul>
            </div>

        </div>

    </nav>

    <div>
        @yield('content')

    </div>

    <footer class="text-bg-warning">
        <h1>Footer!</h1>

    </footer>
</body>
</html>
