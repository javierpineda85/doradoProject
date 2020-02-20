<!DOCTYPE html>
<html lang="es">

<head>
    @yield('analytics')


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--  title -->

   <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="../../css/animation.min.css">

    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css"> <!--version 5.12 -->
    <link rel="stylesheet" href="../../css/ionicons.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Google web font  -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    

    <!--Personal CSS -->

    <link rel="stylesheet" href="../../css/app.css">

    @yield('css')

    <!--Icono 
    <link rel="shortcut icon" href=""> -->

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    @yield('js')

</head>

<body>
    <!-- Preloader section -->
    <div class="preloader">

        <div class="sk-spinner sk-spinner-pulse"></div>

    </div>

    <header>

        <!-- Menu  -->
        <div class="nav-container">
            <nav class="nav-inner transparent">

                <div class="navbar">
                    <div class="container">
                        <div class="row">

                            <div class="brand">

                                <a class="navbar-brand" href="#">
                                    <img src="../../img/dorado-color.jpg" alt="" class="brand-img">
                                </a>
                            </div>

                        <div class="navicon">
                            <div class="menu-container">

                                <div class="circle dark inline">
                                    <i class="icon ion-navicon"></i>
                                </div>

                                <div class="list-menu">
                                    <i class="icon ion-close-round close-iframe"></i>
                                    <div class="intro-inner">
                                        <ul id="nav-menu">
                                            <li><a href="/">INICIO</a></li>
                                            <li><a href="/nosotros">NOSOTROS</a></li>
                                            <li><a href="#">NOTICIAS</a></li>
                                            <li><a href="/contacto">CONTACTO</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            </nav>
        </div>


        
    </header>

    <main>
        @yield('main')
    </main>


    <footer>

    <div class="container ">
        <div class="row ">

            <div class="col-md-12 col-sm-12 ">
                    <p class="wow fadeInUp " data-wow-delay="0.3s ">Desarrollado por <a href="http://thebigtable.com.ar ">The Big Table </a></p>
                    <ul class="social-icon wow fadeInUp " data-wow-delay="0.6s ">
                        <li>
                            <a href="# " class="fab fa-facebook "></a>
                        </li>
                        <li>
                            <a href="# " class="fab fa-twitter "></a>
                        </li>
                        <li>
                            <a href="# " class="fab fa-dribbble "></a>
                        </li>
                        <li>
                            <a href="# " class="fab fa-behance "></a>
                        </li>
                        <li>
                            <a href="# " class="fab fa-google-plus "></a>
                        </li>
                    </ul>
            </div>

        </div>
    </div>
    </footer>

    <!-- Javascript -->
    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/isotope.js "></script>
    <script src="js/imagesloaded.min.js "></script>
    <script src="js/wow.min.js "></script>
    <script src="js/custom.js "></script>
</body>

</html>

