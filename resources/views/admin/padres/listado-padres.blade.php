@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Profesionales/Listado de Padres-Tutores
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">

        </div>
       
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Padres / Tutores</h3>
    <table class="table table-sm table-hover">
        <thead>
            <tr class="text-muted">
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Teléfono 1</th>
                <th>Teléfono 2</th>
                
        </thead>
        <tbody>
        @foreach ($padres as $padre)
            
            <tr>
                <td> {{$padre->parentLastname}} </td>
                <td> {{$padre->parentName}}</td>
                <td> {{$padre->numberPhone}} </td>
                <td> {{$padre->phone2}} </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- pagination  -->
    
    {{$padres->render()}}
   
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
