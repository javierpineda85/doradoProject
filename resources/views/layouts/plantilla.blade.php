<!DOCTYPE html>
<html lang="es">

<head>
    @yield('analytics')


    <meta charset="UTF-8">
    @yield('canonical')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="dorado centro de investigación y rehabilitación">
    @yield('description')

    <!--  title -->

   <title>@yield('title')</title>
   
    <!--<link rel="preload" href="/assets/Pacifico-Bold.woff2" as="font" type="font/woff2" crossorigin>-->
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="../../css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="../../css/animation.min.css">  

    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">  
    <link rel="stylesheet" href="../../css/ionicons.min.css"> 

    <!-- Main CSS -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Google web font  -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    

    <!--Personal CSS -->

   <!-- <link rel="stylesheet" href="../../css/app.css">-->

    @yield('css')

    <!--Icono 
    <link rel="shortcut icon" href=""> -->

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    <script src="js/jquery.js"></script>

    @yield('js')

</head>

<body>


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
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                                            ¡Hola {{ Auth::user()->name }}!
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-lg-right">
                                                            <a class="dropdown-item text-dark" href="{{ route('dashboard') }}">Panel de Control</a>
                                                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
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
                            <a href="https://wa.me/+5492613634997?text=Me%20gustaría%20conocer%20más%20sobre%20ustedes" class="fab fa-whatsapp "></a>
                        </li>
                        
                    </ul>
                    <p class="wow fadeInUp " data-wow-delay="0.3s ">Desarrollado por <a href="http://thebigtable.com.ar ">The Big Table </a></p>
            </div>

        </div>
    </div>
    </footer>

    <!-- Javascript -->
    
    
    <script src="js/isotope.js "></script>
    <script src="js/imagesloaded.min.js "></script>
    <script src="js/wow.min.js "></script>
    <script src="js/custom.js "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>

