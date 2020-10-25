@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection


@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">

    <!-- administrar usuarios -->

    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common border-left-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-users fa-3x text-primary"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar Usuarios</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-primary"> <a href="/admin/users/agregar-usuario">Nuevo</a></span>
                    <span class="btn btn-sm btn-primary"> <a href="/admin/users/listado-de-usuarios">Listado</a></span>
                </div>
            </div>
        </div>
    </div>


    <!-- administrar pacientes -->
   
    <div class="col-xl-6 col-sm-6 p-2"> 
        <div class="card card-common border-left-info">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-child fa-3x text-info"></i>

                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar Pacientes</h5>

                </div>
                <div class="card-footer text-secondary">

                    <span class="btn btn-sm btn-info"> <a href="{{route('searchPadre')}}">Nuevo</a></span>
                    <span class="btn btn-sm btn-info"> <a href="/admin/pacientes/listado-de-pacientes">Listado</a></span>
                    <!-- <span class="btn btn-info"> <a href="#">Administrar</a></span> -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- administrar profesionales -->

    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common border-left-info">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-user-tie fa-3x text-info"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar Profesionales</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-info"> <a href="{{route('searchProfe')}}">Nuevo</a></span>
                    <span class="btn btn-sm btn-info"> <a href="{{route('showProfe')}}">Listado</a></span>
                   <!-- <span class="btn btn-info"> <a href="#">Gestionar</a></span> -->
                </div>
            </div>
        </div>
    </div>
    

    <!-- administrar disciplinas -->

    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common border-left-info">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-book-reader fa-3x text-info"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar disciplinas</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-info"> <a href="#">Nuevo</a></span>
                    <span class="btn btn-sm btn-info"> <a href="#">Listado</a></span>
                    <span class="btn btn-sm btn-info"> <a href="#">Gestionar</a></span>
                </div>
            </div>
        </div>
    </div>
        
    <!-- administrar calendario -->

    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common border-left-success">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-calendar-alt fa-3x text-success"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar Calendario</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-success"> <a href="#">Agregar evento</a></span>
                    <span class="btn btn-sm btn-success"> <a href="#">Ver todo</a></span>
                </div>
            </div>
        </div>
    </div>

    <!--Novedades -->

    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common border-left-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-file fa-3x text-warning"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar Novedades</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-warning"> <a href="/admin/noticias/crear-novedad">Crear</a></span>
                    <span class="btn btn-sm btn-warning"> <a href="/admin/noticias/listado-de-novedades">Listado</a></span>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- end cards  -->



@endsection
