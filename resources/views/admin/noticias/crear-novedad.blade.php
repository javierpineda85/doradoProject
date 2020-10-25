@extends('layouts.dashboard')


@section('title')
Crear Novedad
@endsection

@section('admin-section')
/ Noticias / Crear Novedades
@endsection

@section('main')

<div class="row pt-md-2 mt-md-2 mb-2">
    <div class="p-2 m-2">
        <h3>Crear Novedad</h3>
    </div>
</div>   

 <div class="row col-12">      
    <form action="{{route('storeNews')}}" class="pt-3 mr-3 pr-2" method="post" enctype="multipart/form-data">
                    @csrf
        <div class="row ">
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Título: </Label>
                <input type="text" name="title">

                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

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
                <div class="custom-file col-md-6 m-2">
                    <input type="file" accept=".jpeg, .jpg, .png" name="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Subir Archivo</label>
                </div>
            </div>
        </div>

        <div class="row border"> <!--botones -->

            <div class="col">
                <div class="form-group pt-1">

                    <div class="input-group">
                        <button class="btn btn-sm btn-success m-1" type="submit">Guardar</button>
                        <button class="btn btn-sm btn-info  m-1" type="reset" name="button">{{ __('Limpiar Campos') }}</button>
                        
                    </div>
   
                </div>           
            </div>
        </div>

    </form>  
    </div>
</div>
@endsection