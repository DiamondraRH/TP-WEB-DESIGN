<!DOCTYPE html>
<html lang="en">
<head>
    <title>Articles @yield('title')</title>

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" >
    <!-- Themify -->
    <link rel="stylesheet" href="../assets/plugins/themify/css/themify-icons.css" >
    <link rel="stylesheet" href="../assets/plugins/slick-carousel/slick-theme.css" >
    <link rel="stylesheet" href="../assets/plugins/slick-carousel/slick.css" >
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="../assets/plugins/owl-carousel/owl.carousel.min.css" >
    <link rel="stylesheet" href="../assets/plugins/owl-carousel/owl.theme.default.min.css" >
    <link rel="stylesheet" href="../assets/plugins/magnific-popup/magnific-popup.css" >
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css" >
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('metadata')"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="header-top bg-grey justify-content-center">
        <nav class="navbar navbar-expand-lg navigation">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul id="menu" class="menu navbar-nav ">
                        <li class="nav-item pl-0"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div>
        @yield('content')
    </div>
</body>
</html>
