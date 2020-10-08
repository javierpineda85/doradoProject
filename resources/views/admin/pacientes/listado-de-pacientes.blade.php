@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Listado de pacientes
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">

            <form class="" action="/admin/pacientes/listado-de-pacientesPorApellido" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="lastName" value="" placeholder="Buscar por apellido">
                </div>
            </form>
        </div>
        <button class="btn btn-info" type="reset" name="button"> <a href="/admin/pacientes/listado-de-pacientes">Listar todo</a></button>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Pacientes</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-muted">
                <!--<th class="hidden">Id</th> -->
                <th>Apellido y Nombre</th>
                <th>DNI</th>
                <th>F de Nac</th>
                <th>Diagnóstico</th>
                <th>Obra Social</th>
                <th>VER H.C.</th>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                
                <td> {{$paciente->lastName}} {{$paciente->name}}</td>

                <td> {{$paciente->dni}} </td>
                <td> {{$paciente->birthday}}</td>
                <td> {{$paciente->diagnostic}}</td>
                <td> {{$paciente->socialMedicine}}</td>
                <td><button class="btn btn-info btn-secondary"> <a href="/admin/pacientes/modificar-paciente-{{$paciente->id}}">Ver</a></button> </td>

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