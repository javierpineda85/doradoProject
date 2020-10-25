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
        
        <div class="row ">
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Paciente: </Label>
                <label for=""> {{$paciente->name}} {{$paciente->lastName}} </label>
                <input type="hidden" name="profile_kid_id" value="{{$paciente->id}}">
            </div>
            <div class="col border d-flex align-items-center p-2">
                <Label class="mr-2 font-weight-bold">Seguimiento: </Label>
                <label name="tracking_number"> 1234567</label>
            </div>
            <div class="col border d-flex align-items-center p-2">
            <button class="btn btn-sm btn-success"><a href="/admin/pacientes/historia-clinica-{{$paciente->id}}">Ver Historia</a></button>
            </div>
        </div>
        <div class="row"> <!--Fecha terapeuta area -->
            <div class="col border d-flex align-items-center p-2">
                
                <div class="input-group">
                    <label for="" class="mr-2 font-weight-bold">Fecha: </label>
                    <input type="date" class="form-control small" id="myLocalDataTime" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
                
            </div>
            <div class="col border d-flex align-items-center p-2">
                <label for="" class="mr-2 font-weight-bold">Terapeuta: </label>
                <label for="">{{ Auth::user()->name }} {{Auth::user()->lastName}}</label>
                <input type="hidden" name="user_id" value='{{Auth::user()->id}}'>
                
            </div>
            <div class="col border d-flex align-items-center p-2">

            </div>
        </div>

        <div class="row"> <!--observacion -->
            <div class="col border p-2">
                <div class="form-group">
                    <label for="" class="mr-2 font-weight-bold">Observación: </label> 
                    <textarea class="form-control" name="body" id="" rows="5" cols="1"></textarea>
                </div>
            </div>
        </div>

        <div class="row border"> <!--botones -->

            <div class="col d-flex align-items-center p-2">
                <div class="form-check form-check-inline">
                    <label for="" class="pt-1 mr-2">Prioridad: </label>
                    <input class="form-check-input" type="radio" name="priority" id="inlineRadio1" value="baja">
                    <label class="form-check-label bg-success p-1" for="inlineRadio1">Baja</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="priority" id="inlineRadio2" value="medio">
                    <label class="form-check-label bg-warning p-1" for="inlineRadio2">Media</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="priority" id="inlineRadio3" value="alto">
                    <label class="form-check-label bg-danger p-1" for="inlineRadio3">Alta</label>
                </div>
            </div>

            <div class="col d-flex align-items-center p-2">
                <div class="row">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="status" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <label for=""class="p-1 pt-2">Registro borrador</label>
                        <button class="btn btn-sm btn-info">Guardar</button>
                    </div>
                </div>           
            </div>
        </div>

       
    </div>
    @endforeach
</div>
@endsection
