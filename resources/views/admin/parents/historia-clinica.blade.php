@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Histórica Clínica
@endsection

@section('main')
<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>História Clínica</h3>
    </div>
    
    <div class="container">
        @foreach($pacientes as $paciente)
        <div class="row ">
            <div class="col border d-flex align-items-center p-2">
                <Label class="font-weight-bold">Paciente: </Label>
                <label for=""> {{$paciente->name}} {{$paciente->lastName}}</label>
            </div>
            <div class="col border d-flex align-items-center p-2">
                <Label class="font-weight-bold">Diagnóstico: </Label>
                <label for=""> {{$paciente->diagnostic}}</label>
            </div>

            <div class="col border d-flex align-items-center p-2">
                <button class="btn btn-sm btn-info m-1"><a href="/admin/inicio">Menú</a></button>
            </div>
        </div>
        @endforeach

        
        <div class="row"> <!--Fecha terapeuta area -->
            <table class="table table-sm table-hover">
                <thead>
                    <tr class="text-muted">
                        <th>Fecha</th>
                        <th>Profesional</th>
                        <th>Observación</th>
                </thead>
                <tbody>
                @foreach($histories as $storie)    
                    <tr>                    
                        <td> {{$storie->date}}</td>
                        <td> {{$storie->name}} {{$storie->lastName}} </td>
                        <td> {{$storie->body}}</td>
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
        
        
    </div>
</div>
    <!-- pagination  -->
    {{$histories->render()}}
   
   <!-- pagination  -->

@endsection