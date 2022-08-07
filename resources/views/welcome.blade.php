<!doctype html>
<html>

<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>

<body>

    <!-- navigation bar -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob1') }}">Prob 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob2') }}">Prob 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob3') }}">Prob 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob4') }}">Prob 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob5') }}">Prob 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob6') }}">Prob 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob7') }}">Prob 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob8') }}">Prob 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob9') }}">Prob 9</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('prob10') }}">Prob 10</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- navigation bar ends here -->


    @yield('content')


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>