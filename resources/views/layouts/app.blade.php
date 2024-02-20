
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PKL</title>
    <!-- Your additional head styles, scripts, or links go here -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Your navbar or header goes here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Nilai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mapel.index') }}">Mapel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.index') }}">Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jurnal.index') }}">Jurnal</a>
                </li>
                <li class="nav-item">
                    <a href="/sesi/logout" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Your main content goes here -->
    @yield('content')

    <!-- Your additional scripts go here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
