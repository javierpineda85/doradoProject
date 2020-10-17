@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="../../css/style-header.css">

@endsection


@section('title')
Página no encontrada
@endsection


@section('main')
<section>
    <div class="container">
        <div class="row col-12 justify-content-center">

          <div class="container justify-content-center">
            <div class="message mt-4 mb-4 p-4" style= "max-width: 320px;">
              <h3> Algo salió mal. <br> Por favor revisa la URL en la barra de direcciones e intenta nuevamente.</h1>
            </div>
          </div>

        </div>
    </div>
</section>


@endsection
