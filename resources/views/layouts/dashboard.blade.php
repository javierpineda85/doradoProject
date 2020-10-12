<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="../../css/animation.min.css">

    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css"> <!--version 5.12 -->
    <link rel="stylesheet" href="../../css/ionicons.min.css">

    <!--Personal CSS -->

    <link rel="stylesheet" href="../../css/dashboard.css">
    @yield('css')

    <!--Icono -->
    <link rel="shortcut icon" href="#">

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    @yield('js')

</head>

<body>
    <header>
      <!-- navbar -->
      <nav class="navbar navbar-expanded-md navbar-expand-lg navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
          <div class="container-fluid">
            <div class="row">
              <!-- sidebar -->
              <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top" style="min-width: 250px;">
                <a class="navbar-brand text-white d-block text-center py-03 mb-4 bottom-border"href="/"><img src="../../img/dorado-logo.jpg" alt="" width="100px" class="mt-3 mb-3"></a>

                <div class="bottom-border mb-4 align-items-center ">

                 
                  <label class="usuario text-light justify-content-center">
                  
                      <span><i class="fas fa-user text-light fa-lg mr-3"></i></span>
                           ¡Hola <b>{{Auth::user()->name}} </b>!
                  </label>
                 

                </div> 
                <ul class="navbar-nav flex-column mt-4">
                  <li class="nav-item"> <a href="{{route('cpanel')}}" class="nav-link text-white p-2 mb-2 current"> <i class=" fas fa-home text-light fa-lg mr-3"></i>Panel de Control</a> </li>
                  <li class="nav-item"> <a href="/admin/pacientes/listado-de-pacientes" class="nav-link text-white p-2 mb-2 sidebar-link"> <i class=" fas fa-child text-light fa-lg mr-3"></i>Pacientes</a></li>
                  <li class="nav-item"> <a href="{{route('showProfe')}}" class="nav-link text-white p-2 mb-2 sidebar-link"> <i class=" fas fa-user-tie text-light fa-lg mr-3"></i>Profesionales </a></li>
                  <li class="nav-item"> <a href="/admin/users/listado-de-usuarios" class="nav-link text-white p-2 mb-2 sidebar-link"><i class=" fas fa-users text-light fa-lg mr-3"></i>Usuarios</a></li>
                  <li class="nav-item"> <a href="#" class="nav-link text-white p-2 mb-2 sidebar-link"> <i class=" fas fa-calendar-alt text-light fa-lg mr-3"></i>Calendario</a> </li>
                  <li class="nav-item"> <a href="/admin/noticias/listado-de-novedades" class="nav-link text-white p-2 mb-2 sidebar-link"> <i class=" fas fa-file text-light fa-lg mr-3"></i>Novedades</a> </li>
                </ul>
              </div>
              <!-- end sidebar -->

              <!-- top navbar -->
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-2 top-navbar">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h5 class="text-light mb-0 ml-4">PANEL DE CONTROL @yield('admin-section')</h5>
                  </div>

                  <div class="col-md-3">
                    <ul class="navbar-nav">

                    <li class="nav-item ml-md-auto">
                    <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                      <i class="fas fa-sign-out-alt text-danger fa-lg"></i>
                    </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                      
                     </li>
                    </ul>
                  </div>

                </div>
                
              </div>
              <!-- end top navbar -->
            </div>

          </div>
        </div>
      </nav>

      <!--end  navbar -->
      <!-- INFO / ERROR -->
      @if(session('info'))
                <div class="container mt-4">
                  <div class="row d-flex justify-content-end">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="alert alert-success">
                        {{session('info')}}
                      </div>              
                    </div>
                  </div>
                </div>
                @endif

                @if(count($errors))
                <div class="container mt-5">
                  <div class="row d-flex justify-content-end">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </ul>                
                      </div>              
                    </div>
                  </div>
                </div>
                @endif
              <!-- END INFO / ERROR -->

      <!-- modal -->
      <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Deseas cerrar sesión?</h4>
              <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              Presiona cerrar sesión para salir
            </div>
            <div class="modal-footer">
              <button type="button" name="button" class="btn btn-success" data-dismiss="modal">Permanecer</button>
              <button type="button" name="button" class="btn btn-danger" data-dismiss="modal"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                  {{ __('Cerrar Sesión') }}</a></button>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal -->
    </header>

    <main>
      <div class="container-fluid ">
        <div class="row justify-content-md-center">
          <div class="col-xl-9 col-lg-9 col-md-8 ml-auto">
          
          

            @yield('main')

          </div>
        </div>
      </div>

    </main>

    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/isotope.js "></script>
    <script src="js/imagesloaded.min.js "></script>
    <script src="js/wow.min.js "></script>
    <script src="js/custom.js "></script>
    @yield('script')
</body>

</html>

