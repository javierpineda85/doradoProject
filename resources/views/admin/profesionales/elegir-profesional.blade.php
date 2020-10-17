@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Profesionales/Elegir Profesional
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">

        </div>
       
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Elegir un Profesional</h3>
    <table class="table table-sm table-hover">
        <thead>
            <tr class="text-muted">
                <th>Apellido</th>
                <th>Nombre</th>
                <th>email</th>
                <th>&nbsp;</th>
                
        </thead>
        <tbody>
        @foreach ($profesionales as $profesional)
            
            <tr>
                <td> {{$profesional->lastName}} </td>
                <td> {{$profesional->name}}</td>
                <td> {{$profesional->email}} </td>
                <td><button class="btn btn-sm btn-info btn-success"> <a href="/admin/profesionales/nuevo-profesional{{$profesional->id}}"><i class="fas fa-plus-circle"></i></a></button> </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- pagination  -->
    
 
   
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
