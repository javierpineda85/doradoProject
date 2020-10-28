@extends('layouts.dashboard-parents')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Padres
@endsection

@section('main')
<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="col-xl-6 col-sm-6 p-2"> 
        <div class="card card-common border-left-info">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-child fa-3x text-info"></i>

                </div>
                <div class="text-right text-secondary">
                    <h5>Ver Historia Clinica</h5>

                </div>
                <div class="card-footer text-secondary">

                    <span class="btn btn-sm btn-info"> <a href="{{route('searchPadre')}}">Nuevo</a></span>
                    <span class="btn btn-sm btn-info"> <a href="/admin/pacientes/listado-de-pacientes">Listado</a></span>
                    <!-- <span class="btn btn-info"> <a href="#">Administrar</a></span> -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
