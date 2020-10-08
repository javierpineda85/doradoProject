@extends('layouts.dashboard')


@section('title')
Modificar Novedad
@endsection

@section('admin-section')
/ Noticias / Modificar Novedades
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Modificar Novedad</h3>
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

    
    
    <form action="/admin/noticias/crear-novedad" class="pt-3" method="post" enctype="multipart/form-data">
                    @csrf

        @foreach($novedades as $noticia)
        
        <div class="row ">
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Título: </Label>
                <input type="text" name="title" value="{{$noticia->title}}">
                <Label class="mr-2 font-weight-bold">Subtítulo: </Label>
                <input type="text" name="subtitle" value="{{$noticia->subtitle}}">
            </div>
        </div>

        <div class="row ">
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Creado por: </Label>
                <label class="mr-2">{{$noticia->user_id}}</label>
                <Label class="mr-2 font-weight-bold">El día: </Label>
                <label class="mr-2">{{$noticia->created_at}}</label>

                <Label class="mr-2 font-weight-bold">Modificado el día: </Label>
                <label class="mr-2">{{$noticia->update_at}}</label>
            </div>
        </div>

        <div class="row"> <!--observacion -->
            <div class="col border p-2">
                <div class="form-group">
                    <label for="" class="mr-2 font-weight-bold">Contenido: </label> 
                    <textarea class="form-control" name="body" id="" rows="5" cols="1">{{$noticia->body}}</textarea>
                </div>
            </div>
        </div>

        <div class="row border"> <!--botones -->

            <div class="col d-flex justify-content-start p-2">
                <div class="row d-inline">

                    <div class="input-group">
                        
                        <div class="custom-file col-md-6 m-2">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Subir Imagen</label>
                        </div>

                        <div class="img" width="70px" heigth="70px">
                        {{$noticia->img}}
                        </div>
                        <button class="btn btn-success m-1" type="submit">Guardar</button>
                        <button class="btn btn-info  m-1" type="reset" name="button">{{ __('Limpiar Campos') }}</button>
                        
                        
                            
                            <button type="submit" class="btn btn-danger m-1" name="eliminar">Eliminar</button>
                       
                    </div>
   
                </div>           
            </div>
        </div>
    @endforeach
    </form>
     
    </div>
</div>
@endsection