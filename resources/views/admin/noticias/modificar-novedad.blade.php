@extends('layouts.dashboard')


@section('title')
Modificar Novedad
@endsection

@section('admin-section')
/ Noticias / Modificar Novedades
@endsection

@section('main')


<div class="row pt-md-2 mt-md-2 mb-2">
    <div class="p-2 m-2">
        <h3>Modificar Novedad</h3>
    </div>

</div>      
 <div class="row">  
    <form action="/admin/noticias/crear-novedad" class="pt-3 mr-3 pr-2" method="post" enctype="multipart/form-data">
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
                @foreach($profesional as $profe)
                <label class="mr-2"> {{$profe->lastName}} {{$profe->name}}</label>
                @endforeach
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
                    <textarea class="form-control" name="body" id="" rows="5" cols="1">{!!$noticia->body!!}</textarea>
                </div>
            </div>
        </div>
        <div class="row"> <!--img -->
            <div class="col border p-2">
                <div class="form-group">
                    
                    <div class="img justify-content-start" >
                        <img src="{{$noticia->file}}" alt=""  width="200px" heigth="200px">
                    </div>
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
                        <button class="btn btn-sm btn-success m-1" type="submit">Modificar</button>
                        <button class="btn btn-sm btn-info  m-1" type="reset" name="button">{{ __('Limpiar Campos') }}</button>
                        
                        <form action="/admin/noticias/borrar-novedad{{$noticia->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <button type="submit" class="btn btn-sm btn-danger m-1" name="eliminar">Eliminar</button>
                        </form>
                    </div>
   
                </div>           
            </div>
        </div>
    @endforeach
    </form>
     
    </div>
</div>
@endsection