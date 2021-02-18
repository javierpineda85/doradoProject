@extends('layouts.dashboard')


@section('title')
Cargar Historia Clinica
@endsection

@section('admin-section')
/ Concurrentes / Gestión de Concurrentes
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Modificar Historia Clínica</h3>
    </div>

    <!-- INICIO DE FORMULARIO -->
    <div class="row col-12">
        

        <form action="/admin/pacientes/modificar-paciente-{{$pacientes->id}}" class="pt-3" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- DATOS PERSONALES -->

            <h4 class="pt-2 pb-2 m-2">Datos Personales </h4>
            
            <div class="form-row"> <!-- Nombres y apellidos -->
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Nombres</label>
                    <input type="hidden" name="profile_kid_id" value="{{$pacientes->id}}">
                    <input type="text" name="name"  class="form-control" value="{{$pacientes->name}}" required>

                </div>
            
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Apellidos</label>
                    <input type="text" name="lastName" class="form-control" value="{{$pacientes->lastName}}" required>

                </div>
            </div>

            <div class="form-row"> <!--DNI, genero, fecha de nacimiento -->
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">D.N.I.</label>
                    <div class="input-group">
                        <input type="text" name="dni" class="form-control" value="{{$pacientes->dni}}" aria-describedby="validationTooltipUsernamePrepend" required>

                    </div>
                </div>
            
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Género</label>
                    <select class="custom-select" name="genre">
                        <option value="{{$pacientes->genre}}" selected="selected">{{$pacientes->genre}}</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Fecha de Nac.</label>
                    <div class="input-group">
                        <input type="date" name="birthday" class="form-control" placeholder="30/02/2000" value="{{$pacientes->birthday}}" required>

                    </div>
                </div>
            </div>
            <div class="form-row">  <!-- Diagnostico Clinico / Foto perfil -->
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip02">Diagnóstico Clínico</label>
                    <input type="text" name="diagnostic" class="form-control" value="{{$pacientes->diagnostic}}" required>
    
                </div>
            </div>

            <div class="form-row"> <!-- Foto -->
                <div class="custom-file col-md-4 mb-3">
                    <input type="file" name="file" class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Subir Foto</label>
                    <div class="img col-md-4 mb-3" >
                            <img src="" alt=""  width="200px" heigth="200px">
                        </div>
                </div>
            </div>

            <div class="form-row"> <!-- calle, altura, depto -->
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip03">Calle / Barrio</label>
                    <input type="text" name="street" class="form-control"   value="{{$pacientes->location->street}}" required>
                </div>
            
                <div class="col-md-2 mb-3">
                    <label for="validationTooltip04">Nro / Mna</label>
                    <input type="text" name="street_number" class="form-control"  value="{{$pacientes->location->street_number}}" required>
                </div>
            
                <div class="col-md-2 mb-3">
                    <label for="validationTooltip05">Depto / Casa</label>
                    <input type="text" name="street_house"  class="form-control"  value="{{$pacientes->location->street_house}}">
                </div>
            </div>

            <div class="form-row"> <!-- localidad / provincia -->
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Localidad</label>
                    <input type="text" name="locality" class="form-control" value="{{$pacientes->location->locality}}" required>
                </div>
            
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip04">Provincia</label>
                    <input type="text" name="city" class="form-control" value="{{$pacientes->location->city}}" required>
                </div>

            </div>
        
            
        @foreach($padres as $padre)
            <div class="form-row">  <!-- Nro contacto y nro emergencia -->

                <div class="col-md-4 mb-3">
                    <label for="validationTooltip04 font-weight-bold">Teléfono de Contacto</label>
                    <input type="text" name="numberPhone" class="form-control" value="{{$padre->numberPhone}}" required>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip05 font-weight-bold">Teléfono de emergencia</label>
                    <input type="text" name="phone2" class="form-control" value="{{$padre->phone2}}" required>
                </div>
                
            </div>
            <div class="form-row">  <!-- Nombre Responsable legar y DNI -->
                <div class="col-md-5 mb-3">
                    <label for="validationTooltip02 font-weight-bold">Nombe del Responsable Legal</label>
                    <input type="hidden" name="user_id" value="{{$padre->id}}">
                    <input type="text" class="form-control" value="{{$padre->lastName}} {{$padre->name}}" required>
                </div>
                
                <div class="col-md-3 mb-2">
                    <label for="validationTooltipUsername font-weight-bold">D.N.I.</label>
                    <div class="input-group">
                        <input type="text" name="parentDni" class="form-control" value="{{$padre->parentDni}}" required>
                    </div>
                </div>
            </div>
        @endforeach

            <!-- DATOS ESCOLARES -->

            <div class="form-row">
                <h4 class="pt-2 pb-2 m-2">Datos Escolares</h4>
            </div>
        
            <div class="form-row"> <!-- Nombres escuela -->
                <div class="col-md-12 mb-2">
                    <label for="validationTooltipUsername">Escuela</label>
                    <div class="input-group">
                        <input type="text" name="school_name" class="form-control" value= "{{$pacientes->school->school_name}}" required>
                    </div>
                </div>
            </div>

            <div class="form-row">  <!-- Nivel / Turno / Horario -->
                <div class="col-md-4 mb-2">
                    <label for="validationTooltip02">Nivel</label>
                    <select class="custom-select" name="school_level">
                        <option value= "{{$pacientes->school->school_level}}" selected="selected">{{$pacientes->school->school_level}}</option>
                        <option value="inicial">Inicial</option>
                        <option value="primario">Primario</option>
                        <option value="secundario">Secundario</option>
                    </select>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="validationTooltip02">Turno</label>
                    <select class="custom-select" name="school_turn">
                        <option value= "{{$pacientes->school->school_turn}}" selected="selected">{{$pacientes->school->school_turn}}</option>
                        <option value="manana">Mañana</option>
                        <option value="tarde">Tarde</option>
                        <option value="vespertino">Vespertino</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">Horario:</label>
                    <input type="text" name="schedule" class="form-control"placeholder="07:40-12:45" value= "{{$pacientes->school->schedule}}" required>
                </div>
            </div>

            <div class="form-row"> <!--Domicilio escolar calle, altura, depto -->
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip03">Calle / Barrio</label>
                    <input type="text" name="school_street" class="form-control" value="{{$pacientes->school->street}}" required>
                </div>
            
                <div class="col-md-2 mb-3">
                    <label for="validationTooltip04">Nro / Mna</label>
                    <input type="text" name="school_street_number" class="form-control" value="{{$pacientes->school->street_number}}" required>
                </div>
            
            </div>

            <div class="form-row"> <!-- localidad / provincia -->
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Localidad</label>
                    <input type="text" name="school_locality" class="form-control" value="{{$pacientes->school->locality}}" required>
                    <div class="invalid-tooltip">
                        Por favor completa con la calle o barrio.
                    </div>
                </div>
            
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip04">Provincia</label>
                    <input type="text" name="school_city" class="form-control" value="{{$pacientes->school->city}}" required>
                </div>

            </div>

            <div class="form-row"> <!-- Referente nombre y telefono -->
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip03">Referente de Contacto</label>
                    <input type="text"  name="school_contact_name" class="form-control" value="{{$pacientes->school->contact_name}}" required>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">Teléfono</label>
                    <input type="text" name="school_contact_phone" class="form-control" value="{{$pacientes->school->contact_phone}}" required>

                </div>
            </div>

        <!-- DATOS OBRA SOCIAL -->
            
            <div class="form-row">
                <h4 class="pt-2 pb-2 m-2">Datos Obra Social</h4>
            </div>

            <div class="form-row"> <!-- obra social / nº afiliado -->
                <div class="col-md-8 mb-2">
                    <label for="validationTooltipUsername">Obra Social</label>
                    <div class="input-group">
                        <input type="text" name="socialMedicine" class="form-control" value="{{$pacientes->socialMedicine}}" required>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="validationTooltipUsername">Nº de afiliado</label>
                    <div class="input-group">
                        <input type="text" name="afiliado" class="form-control" value="{{$pacientes->afiliado}}" required>
                    </div>
                </div>

            </div>

            <div class="form-row"> <!-- Domicilio / fecha de ingreso -->
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip03">Domicilio Obra Social</label>
                    <input type="text" class="form-control" name="socialMedicineAddress" value="{{$pacientes->socialMedicineAddress}}" required>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">Fecha de Ingreso</label>
                    <input type="date" name="ingreso" class="form-control" value="{{$pacientes->ingreso}}" required>
                </div>
            </div>

            <button class="btn btn-sm btn-success" type="submit">Modificar</button>
            
        </form>

    </div>
    <form class="pt-3" action="/admin/pacientes/eliminar-paciente-{{$pacientes->id}}" method="POST" enctype="multipart/form-data">
         @csrf
        <input type="hidden" name="id" value="{{$pacientes->id}}">
        <button type="submit" class="btn btn-sm btn-danger">Dar de Baja</button>
    </form>
   
</div>




@endsection
