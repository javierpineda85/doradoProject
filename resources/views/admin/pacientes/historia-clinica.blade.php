@extends('layouts.dashboard')


@section('title')
Evolucionar Pacientes
@endsection

@section('admin-section')
/ Pacientes / Historia Clinica
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Historia Clinica</h3>
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
                <button class="btn btn-sm btn-success m-1"><a href="/admin/pacientes/evolucionar-paciente-{{$paciente->id}}">Evolucionar</a></button>
                <button class="btn btn-sm btn-info m-1"><a href="{{route('dashboard')}}">Menú</a></button>
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
                        <th>Prioridad</th>
                </thead>
                <tbody>
                @foreach($histories as $storie)    
                    <tr>                    
                        <td> {{$storie->date}}</td>
                        <td> {{$storie->name}} {{$storie->lastName}} </td>
                        <td> {{$storie->body}}</td>
                        <td> {{$storie->priority}}</td>
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