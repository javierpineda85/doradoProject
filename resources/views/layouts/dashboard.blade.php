<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" ></script>

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
              <!-- top navbar -->
              <div class="col-xl-12 col-lg-9 col-md-8 ml-auto fixed-top py-1 top-navbar">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <!--<a class="navbar-brand text-white d-block text-center rigth-border"href="/"><img src="../../img/dorado-logo.jpg" alt="logo" width="50px" ></a> -->

                      <div class="align-items-center ">
                          <label class="usuario text-light justify-content-center">
                            ¡Hola <b>{{Auth::user()->name}} </b>!
                          </label>
                      
                      </div> 
                  </div>

                  <div class="col-md-8">
                    <h5 class="text-light mb-0 ml-4">PANEL DE CONTROL @yield('admin-section')</h5>
                  </div>

                  <div class="col-md-2">
                    <ul class="navbar-nav">
                      <li class="nav-item ml-md-auto text-white">CPanel<a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-tachometer-alt text-success fa-lg"></i></a></li>
                      <li class="nav-item ml-md-auto text-white">Web<a href="/" class="nav-link"><i class="fas fa-globe-americas text-info fa-lg"></i></a></li>
                      <li class="nav-item ml-md-auto text-white">Salir<a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                      
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
 

      <!-- modal -->
      <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-body">
              ¿Qué deseas hacer?
            </div>
            <div class="modal-footer">
              <button type="button" name="button" class="btn btn-sm btn-success" data-dismiss="modal">Permanecer</button>
              <button type="button" name="button" class="btn btn-sm btn-danger" data-dismiss="modal"><a href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <div class="row justify-content-center">
          <div class="col-xl-11 col-lg-11 col-md-8 ml-auto m-3 pt-3">
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>

