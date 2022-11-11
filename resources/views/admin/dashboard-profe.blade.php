@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection


@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">

    <!-- Listado de Padres -->
   
    <div class="col-xl-4 col-sm-5 p-2"> 
        <div class="card card-common border-left-info">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-user-friends fa-3x text-info"></i>

                </div>
                <div class="text-right text-secondary">
                    <h5>Padres</h5>

                </div>
                <div class="card-footer text-secondary">

                    <span class="btn btn-sm btn-info"> <a href="/admin/padres/listado-padres">Listado</a></span>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- administrar pacientes -->
   
    <div class="col-xl-4 col-sm-5 p-2"> 
        <div class="card card-common border-left-info">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-child fa-3x text-info"></i>

                </div>
                <div class="text-right text-secondary">
                    <h5> Pacientes</h5>

                </div>
                <div class="card-footer text-secondary">

                    <span class="btn btn-sm btn-info"> <a href="/admin/pacientes/listado-de-pacientes">Listado</a></span>
                    
                </div>
            </div>
        </div>
    </div>
    
   <!-- Mensajeria -->

   <div class="col-xl-4 col-sm-5 p-2">
        <div class="card card-common border-left-success">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class=" fas fa-comments fa-3x text-success"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Mensajeria</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-success"> <a href="/admin/mensajeria/mensajes">Ir a ...</a></span>
                </div>
            </div>
        </div>
    </div>
    
     
    

    <!-- calendario 
    <div class="col-xl-4 col-sm-5 p-2">
        <div class="card card-common border-left-success">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-calendar-alt fa-3x text-success"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Calendario</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-sm btn-success"> <a href="#">Agregar evento</a></span>
                    <span class="btn btn-sm btn-success"> <a href="#">Ver todo</a></span>
                </div>
            </div>
        </div>
    </div> -->


    
</div>


<!-- end cards  -->



@endsection
