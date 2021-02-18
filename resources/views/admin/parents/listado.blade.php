@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Padres
@endsection

@section('main')
<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="container">
      
        <h3 class="text-muted text-center mb-3 mt-3">Listado de Hijos/as en Dorado </h3>
        <table class="table table-sm table-hover">
            <thead>
                <tr class="text-muted">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>&nbsp;</th>
                                    
            </thead>
            <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td> {{$paciente->name}} </td>
                    <td> {{$paciente->lastName}}</td>
                    <td><button class="btn btn-sm btn-success"><a href="/admin/parents/historia-clinica-{{$paciente->id}}"><i class="fas fa-eye"></i></a</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
