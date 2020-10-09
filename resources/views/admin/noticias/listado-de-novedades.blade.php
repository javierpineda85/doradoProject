@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Noticias /Listado de Noticias
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">

            <form class="" action="/admin/noticias/listado-de-novedadesPorTitulo" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="title" value="" placeholder="Buscar por título">
                </div>
            </form>
        </div>
        <button class="btn btn-info" type="reset" name="button"> <a href="/admin/noticias/listado-de-novedades">Listar todo</a></button>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Noticias</h3>
    <table class="table table-sm table-hover">
        <thead>
            <tr class="text-muted">
                <th>Fecha</th>
                <th>titulo</th>
                <th>subtitulo</th>
                <th>Cuerpo</th>
                <th>Ver </th>
                
        </thead>
        <tbody>
        @foreach ($novedades as $noticia)
            
            <tr>
                <td> {{$noticia->created_at}} </td>
                <td> {{$noticia->title}} </td>
                <td> {{$noticia->subtitle}}</td>
                <td> {{$noticia->body}}</td>
                <td><button class="btn btn-info btn-secondary"> <a href="/admin/noticias/ver-novedad{{$noticia->id}}"><i class="fas fa-search"></i></a></button> </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- pagination  -->
    
    {{$novedades->render()}}
   
    <!-- pagination  -->



    <!-- modal -->
    <div class="modal fade" id="modificar-users">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Qué deseas realizar?</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Presiona modificar para actualizar sus datos o <br>
                    eliminar para borrar permanentemente de la base de datos.

                </div>
                <div class="modal-footer">
                    <button type="button" name="button" class="btn btn-info" data-dismiss="modal">Continar</button>
                    <button type="button" name="button" class="btn btn-danger" data-dismiss="modal">Borrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</section>

@endsection
