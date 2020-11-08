<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>BeeFLix</title>
</head>
<body>
    <!-- As a link -->
    <nav class="navbar fixed-top navbar-dark  primary-color">
        <div class="row">
            <a href="/" class="navbar-text black-text">
                BeeFlix
            </a>
            
            <div class="w-100"></div>
            <a href="{{ url()->previous() }}" class="btn btn-elegant btn-lg near">KEMBALI</i></a>
            <a href="/" class="btn btn-outline-elegant btn-lg near">LIHAT SEMUA FILM</a>
        </div>
    </nav>
  
    <div class="container-fluid content">
        @yield('content')
    </div>

    {{-- <!-- Footer -->
    <footer class="page-footer font-small black">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        Kelvin Adithya / 2201756752
        </div>
    </footer> --}}

</body>
</html>