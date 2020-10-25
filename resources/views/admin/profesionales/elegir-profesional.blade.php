@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/Profesionales/Elegir Profesional
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">

        </div>
       
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Elegir un Profesional</h3>
    <table class="table table-sm table-hover">
        <thead>
            <tr class="text-muted">
                <th>Apellido</th>
                <th>Nombre</th>
                <th>email</th>
                <th>&nbsp;</th>
                
        </thead>
        <tbody>
        @foreach ($profesionales as $profesional)
            
            <tr>
                <td> {{$profesional->lastName}} </td>
                <td> {{$profesional->name}}</td>
                <td> {{$profesional->email}} </td>
                <td><button class="btn btn-sm btn-info btn-success"> <a href="/admin/profesionales/nuevo-profesional{{$profesional->id}}"><i class="fas fa-plus-circle"></i></a></button> </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- pagination  -->
    
 
   
    <!-- pagination  -->


</section>

@endsection
