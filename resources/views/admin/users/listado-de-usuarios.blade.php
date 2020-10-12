@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Ususarios /Listado de Usuarios
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">
            <form class="" action="/admin/usuarios/listado-de-usuariosPorMail" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="email" value="" placeholder="Buscar por email">
                </div>
            </form>
            <form class="" action="/admin/usuarios/listado-de-usuariosPorApellido" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="lastName" value="" placeholder="Buscar por apellido">
                </div>
            </form>
        </div>
        <button class="btn btn-sm btn-info" type="reset" name="button"> <a href="/admin/usuarios/listado-de-usuarios">Listar todo</a></button>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Usuarios</h3>
    <table class="table table-sm table-hover">
        <thead>
            <tr class="text-muted">
                <th>Apellido y Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Privilegios</th>
                <th colspan="1">&nbsp;</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            
            <tr>
                <td>{{$usuario->lastName}} {{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->phone}}</td>
                <td>usuario->grupo</td>
                <td><button class="btn btn-sm btn-info btn-secondary"> <a href="/admin/users/modificar-usuario-{{$usuario->id}}"><i class="fas fa-search"></i></a></button></td>
            </tr>

            @endforeach
        </tbody>
        
    </table>
    <!-- pagination  -->
    {{$usuarios->render()}}
   
    <!-- pagination  -->


</section>

@endsection
