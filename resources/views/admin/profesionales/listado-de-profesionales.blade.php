@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Profesionales / Listado de Profesionales
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">
            <form class="" action="{{route('showProfeEmail')}}" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="email" value="" placeholder="Buscar por email">
                </div>
            </form>
            <form class="" action="{{route('showProfeLastname')}}" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="lastName" value="" placeholder="Buscar por apellido">
                </div>
            </form>
        </div>
        <button class="btn btn-sm btn-info" type="reset" name="button"> <a href="{{route('showProfe')}}">Listar todo</a></button>
        <button class="btn btn-sm btn-success ml-2"> <a href="{{route('searchProfe')}}">Nuevo</a></button>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Profesionales</h3>
    <table class="table table-sm table-hover">
        <thead>
            <tr class="text-muted">
                <th>Apellido y Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Especialidad</th>
                <th>&nbsp;</th>
                
        </thead>
        <tbody>
        @foreach ($profesionales as $profesional)
            
            <tr>
                <td> {{$profesional->lastName}} {{$profesional->name}}</td>
                <td> {{$profesional->email}} </td>
                <td> {{$profesional->phone}}</td>
                <td> {{$profesional->specialty}}</td>
                <td><button class="btn btn-sm btn-info btn-secondary"> <a href="/admin/profesionales/modificar-profesional-{{$profesional->id}}"><i class="fas fa-search"></i></a></button> </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- pagination  -->
    {{$profesionales->render()}}
 
   
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
