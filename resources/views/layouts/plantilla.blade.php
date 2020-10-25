<!DOCTYPE html>
<html lang="es">

<head>
    @yield('analytics')


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="dorado centro de investigación y rehabilitación">
    <meta name="description" content="Somos un equipo de profesionales de la salud y la educación orientados al desempeño y aplicación de estrategias y programas inter y transdisicplinarios.">

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
    <link rel="stylesheet" href="../../css/font-awesome.min.css">

    @yield('css')

    <!--Icono 
    <link rel="shortcut icon" href=""> -->

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" ></script> 
   
    @yield('js')

</head>

<body>
    <!-- Preloader section 
    <div class="preloader">

        <div class="sk-spinner sk-spinner-pulse"></div>

    </div>-->

    <header>

        <!-- Menu  -->
        <div class="nav-container">
            <nav class="nav-inner transparent">

                <div class="navbar">
                    <div class="container">
                        <div class="row">

                            <div class="brand">

                                <a class="navbar-brand" href="/">
                                    <img src="../../img/dorado-logo.png" alt="" class="brand-img">
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
                                            <li><a href="/contacto">CONTACTO</a></li>
                                            <li><a href="/novedades">NOVEDADES</a></li>

                                        
                                            <ul class="navbar-nav ml-auto">
                                                <!-- Authentication Links -->
                                                @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                                    </li>

                                                @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('dashboard') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Salir') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                                @endguest
                                            </ul>
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
                    
                    <ul class="social-icon wow fadeInUp " data-wow-delay="0.6s ">
                        <li>
                            <a href="# " class="fab fa-facebook "></a>
                        </li>
                        <li>
                            <a href="# " class="fab fa-instagram"></a>
                        </li>
                        <li>
                            <a href="# " class="fab fa-whatsapp "></a>
                        </li>
                        
                    </ul>
                    <p class="wow fadeInUp " data-wow-delay="0.3s ">Desarrollado por <a href="http://thebigtable.com.ar ">The Big Table </a></p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js"> </script>

</body>

</html>

