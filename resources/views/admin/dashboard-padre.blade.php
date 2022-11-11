@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection


@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">

    <!-- Listado de Padres -->

    <div class="col-xl-6 col-sm-5 p-2">
        <div class="card card-common border-left-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-child fa-3x text-primary"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Histórias Clínicas</h5>
                </div>
                <div class="card-footer text-secondary">
                    @foreach ($pacientes as $paciente)
                        <span class="btn btn-sm btn-primary"><a href="/admin/parents/historia-clinica-{{$paciente->id}}"><i class="fas fa-eye"></i> {{$paciente->name}} {{$paciente->lastName}}</a></span>
                    
                     @endforeach
                    
                
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- end cards  -->



@endsection
