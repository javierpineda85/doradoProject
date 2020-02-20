@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="../../css/style-header.css">

@endsection


@section('title')
Acceso no autorizado
@endsection


@section('main')

<div class="container justify-content-center">
  <div class="message mt-4 mb-4 p-4" style= "max-width: 320px;">
    <h3>No posees permiso para acceder a este contenido. <br> Por favor contacta al administrador de la página.</h1>
  </div>
</div>

@endsection
