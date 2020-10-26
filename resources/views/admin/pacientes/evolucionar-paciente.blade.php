@extends('layouts.dashboard')


@section('title')
Evolucionar Pacientes
@endsection

@section('admin-section')
/Pacientes/Evolucionar
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Evolucionar</h3>
    </div>
    @foreach($pacientes as $paciente)
    <div class="container">
    
        <form action="/admin/pacientes/evolucionar-paciente-{{$paciente->id}}"  method="post" enctype="multipart/form-data">
            @csrf 
            <div class="row ">
                <div class="col border d-flex align-items-center p-2">
                    <Label class="mr-2 font-weight-bold">Paciente: </Label>
                    <label for=""> {{$paciente->name}} {{$paciente->lastName}} </label>
                    <input type="hidden" name="profile_kid_id" value="{{$paciente->id}}">
                </div>
                <div class="col border d-flex align-items-center p-2">
                    <Label class="mr-2 font-weight-bold">Seguimiento: </Label>
                    <input name="tracking_number">
                </div>
                
                <div class="col border d-flex align-items-center p-2">
                    <button class="btn btn-sm btn-success"><a href="/admin/pacientes/historia-clinica-{{$paciente->id}}">Ver Historia</a></button>
                </div>
            </div>
            <div class="row"> <!--Fecha terapeuta area -->
                <div class="col border d-flex align-items-center p-2">
                    
                    <div class="input-group">
                        <label class="mr-2 font-weight-bold">Fecha: </label>
                        {{Form::date('date', \Carbon\Carbon::now())}}
                    </div>
                    
                </div>
                <div class="col border d-flex align-items-center p-2">
                    <label for="" class="mr-2 font-weight-bold">Terapeuta: </label>
                    <label for="">{{ Auth::user()->name }} {{Auth::user()->lastName}}</label>
                    <input type="hidden" name="user_id" value='{{Auth::user()->id}}'>
                    
                </div>

            </div>

            <div class="row"> <!--observacion -->
                <div class="col border p-2">
                    <div class="form-group">
                        <label for="" class="mr-2 font-weight-bold">Observación: </label> 
                        <textarea class="form-control" name="body" id="" rows="5" cols="1" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row border"> <!--botones -->

                <div class="col d-flex align-items-center p-2">
                    <div class="form-check form-check-inline">
                        <label for="" class="pt-1 mr-2 font-weight-bold">Prioridad: </label>
                        {{Form::label('prioridad', 'ALTA', ['class' => 'bg-danger p-2 m-2'])}}
                        {{Form::radio('priority', 'ALTA')}}

                        {{Form::label('prioridad', 'MEDIA', ['class' => 'bg-warning p-2 m-2'])}}
                        {{Form::radio('priority', 'MEDIA')}}

                        {{Form::label('prioridad', 'BAJA', ['class' => 'bg-success p-2 m-2'])}}
                        {{Form::radio('priority', 'BAJA', true)}}
                    </div>
                </div>

                <div class="col d-flex align-items-center p-2">
                    
                        <div class="form-check form-check-inline">
                            <label for=""class="p-1 pt-2 font-weight-bold">Tipo de Registro: </label>
                            {{Form::label('prioridad', 'PRIVADO', ['class' => 'bg-light p-2 m-2'])}}
                            {{Form::radio('status', 'DRAFT')}}

                            {{Form::label('prioridad', 'PUBLICO', ['class' => 'bg-light p-2 m-2'])}}
                            {{Form::radio('status', 'PUBLISHED', true)}}
                             
                            
                        </div>
                             
                </div>
                
            </div>
            <button class="btn btn-sm btn-info">Guardar</button>
        </form>
    </div>
    @endforeach
</div>
@endsection
