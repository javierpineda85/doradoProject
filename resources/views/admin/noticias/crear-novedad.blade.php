@extends('layouts.dashboard')


@section('title')
Crear Novedad
@endsection

@section('admin-section')
/ Noticias / Crear Novedades
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Crear Novedad</h3>
    </div>
    
    <div class="container">
    @if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif

    @if(count($errors))
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form action="/admin/noticias/agregar-noticia" class="pt-3" method="post" enctype="multipart/form-data">
                    @csrf
        <div class="row ">
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Título: </Label>
                <input type="text" name="title">

                <Label class="mr-2 font-weight-bold">profesional </Label>
                <input type="text" name="user_id" value="21">

            </div>
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Subtítulo: </Label>
                <input type="text" name="subtitle">
            </div>
        </div>

        <div class="row"> <!--observacion -->
            <div class="col border p-2">
                <div class="form-group">
                    <label for="" class="mr-2 font-weight-bold">Contenido: </label> 
                    <textarea class="form-control" name="body" id="" rows="5" cols="1"></textarea>
                </div>
            </div>
        </div>

        <div class="row border"> <!--botones -->

            <div class="col d-flex justify-content-start p-2">
                <div class="row d-inline">

                    <div class="input-group">
                        
                        <div class="custom-file col-md-6 m-2">
                            <input type="file" name="img" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Subir Archivo</label>
                        </div>
                        <button class="btn btn-success m-1" type="submit">Guardar</button>
                        <button class="btn btn-info  m-1" type="reset" name="button">{{ __('Limpiar Campos') }}</button>
                        
                    </div>
   
                </div>           
            </div>
        </div>

    </form>  
    </div>
</div>
@endsection