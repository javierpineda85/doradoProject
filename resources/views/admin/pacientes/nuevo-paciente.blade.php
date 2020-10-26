@extends('layouts.dashboard')


@section('title')
Cargar Historia Clinica
@endsection

@section('admin-section')
/Pacientes/Nueva Historia Clinica
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5 ">
    <div class="p-3 m-3">
        <h3>Nueva Historia Clínica</h3>
    </div>

    <!-- INICIO DE FORMULARIO -->

    <form action="{{route('storeKid')}}"  method="post" enctype="multipart/form-data">
    @csrf
        <!-- DATOS PERSONALES -->

        <h4 class="pt-2 pb-2 m-2">Datos Personales</h4>
        
        <div class="form-row"> <!-- Nombres y apellidos -->
        
            <div class="col-md-6 mb-3">
            
                <label for="validationTooltip01 font-weight-bold">Nombres</label>
                <input type="text" name="name" class="form-control" required>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02 font-weight-bold">Apellidos</label>
                <input type="text" name="lastName" class="form-control" required>
            </div>
        </div>

        <div class="form-row"> <!--DNI, genero, fecha de nacimiento -->
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername font-weight-bold">D.N.I.</label>
                <div class="input-group">
                    <input type="text" name="dni" class="form-control" required>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02 font-weight-bold">Género</label>
                <select name="genre" class="custom-select">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername font-weight-bold">Fecha de Nac.</label>
                <div class="input-group">
                    <input type="date" name="birthday" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-row">  <!-- Diagnostico Clinico / Foto perfil -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip02 font-weight-bold">Diagnóstico Clínico</label>
                <input type="text" name="diagnostic" class="form-control" required>

            </div>
        </div>

        <div class="form-row">
            <div class="custom-file col-md-4 mb-3">
                <input type="file" name="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Subir Foto</label>
            </div>
        </div>

        <div class="form-row"> <!-- calle, altura, depto -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03 font-weight-bold">Calle / Barrio</label>
                <input type="text" name="street" class="form-control" required>
            </div>
        
            <div class="col-md-2 mb-3">
                <label for="validationTooltip04 font-weight-bold">Nro / Mna</label>
                <input type="text" name="street_number" class="form-control">
            </div>
        
            <div class="col-md-2 mb-3">
                <label for="validationTooltip05 font-weight-bold">Depto / Casa</label>
                <input type="text" name="street_house" class="form-control">
            </div>
        </div>

        <div class="form-row"> <!-- localidad / provincia -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03 font-weight-bold">Localidad</label>
                <input type="text" name="locality" class="form-control" required>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04 font-weight-bold">Provincia</label>
                <input type="text" name="city" class="form-control" required>
            </div>

        </div>
        @foreach($padres as $padre)
        <div class="form-row">  <!-- Nro contacto y nro emergencia -->

            <div class="col-md-4 mb-3">
                <label for="validationTooltip04 font-weight-bold">Teléfono de Contacto</label>
                <input type="text" name="numberPhone" class="form-control" value="{{$padre->phone}}" required>
             </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip05 font-weight-bold">Teléfono de emergencia</label>
                <input type="text" name="phone2" class="form-control" required>
            </div>
            
        </div>
        <div class="form-row">  <!-- Nombre Responsable legar y DNI -->
            <label for="validationTooltip02 font-weight-bold"> Responsable Legal</label>
            <input type="hidden" name="user_id" value="{{$padre->id}}">
        </div>
        <div class="form-row">    
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername font-weight-bold">Nombre: </label>
                <input type="text" name="parentName" class="form-control" value="{{$padre->name}}" required>
            </div>
            <div class="col-md-3 mb-3">
                
                <label for="validationTooltipUsername font-weight-bold">Apellido: </label>   
                <input type="text" name="parentLastname" class="form-control" value="{{$padre->lastName}}" required>
                
            </div>
            
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername font-weight-bold">D.N.I.</label>
                <div class="input-group">
                    <input type="text" name="dni_parent" class="form-control" required>
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
                <label for="validationTooltipUsername font-weight-bold">Nro y Nombre de Escuela</label>
                <div class="input-group">
                    <input type="text" name="school_name" class="form-control" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor no te olvides de completar aquí.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">  <!-- Nivel / Turno / Horario -->
            <div class="col-md-4 mb-2">
                <label for="validationTooltip02 font-weight-bold">Nivel</label>
                <select name="school_level" class="custom-select">
                    <option value="inicial">Inicial</option>
                    <option value="primario">Primario</option>
                    <option value="secundario">Secundario</option>
                </select>
            </div>

            <div class="col-md-4 mb-2">
                <label for="validationTooltip02 font-weight-bold">Turno</label>
                <select name="school_turn" class="custom-select">
                    <option value="manana">Mañana</option>
                    <option value="tarde">Tarde</option>
                    <option value="vespertino">Vespertino</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04 font-weight-bold">Horario:</label>
                <input type="text" name="schedule" class="form-control" id="validationTooltip04" placeholder="07:40-12:45" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
        </div>

        <div class="form-row"> <!--Domicilio escolar calle, altura-->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03 font-weight-bold">Calle / Barrio</label>
                <input type="text" name="school_street" class="form-control" id="validationTooltip03"  required>
                <div class="invalid-tooltip">
                    Por favor completa con la calle o barrio.
                </div>
            </div>
        
            <div class="col-md-2 mb-3">
                <label for="validationTooltip04 font-weight-bold">Nro / Mna</label>
                <input type="text" name="school_street_number" class="form-control" id="validationTooltip04" >
                <div class="invalid-tooltip">
                    Recuerda colocar la altura o manzana.
                </div>
            </div>
        
        </div>

        <div class="form-row"> <!-- localidad / provincia -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03 font-weight-bold">Localidad</label>
                <input type="text" name="school_locality" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Por favor completa con la localidad.
                </div>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04 font-weight-bold">Provincia</label>
                <input type="text" name="school_city" class="form-control" id="validationTooltip04" required>
                <div class="invalid-tooltip">
                    Recuerda colocar la altura o manzana.
                </div>
            </div>

        </div>

        <div class="form-row"> <!-- Referente nombre y telefono -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03 font-weight-bold">Referente de Contacto</label>
                <input type="text" name="school_contact_name" class="form-control" id="validationTooltip03"  required>
                <div class="invalid-tooltip">
                    Por favor completa el referente de contacto.
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04 font-weight-bold">Teléfono</label>
                <input type="text" name="school_contact_phone" class="form-control" id="validationTooltip04"  required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
        </div>

    <!-- DATOS OBRA SOCIAL -->
        
        <div class="form-row">
            <h4 class="pt-2 pb-2 m-2">Datos Obra Social</h4>
        </div>

        <div class="form-row"> <!-- obra social / nº afiliado -->
            <div class="col-md-8 mb-2">
                <label for="validationTooltipUsername font-weight-bold">Obra Social</label>
                <div class="input-group">
                    <input type="text" name="socialMedicine" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <label for="validationTooltipUsername font-weight-bold">Nº de afiliado</label>
                <div class="input-group">
                    <input type="text" name="afiliado" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
            </div>

        </div>

        <div class="form-row"> <!-- Domicilio / fecha de ingreso -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03 font-weight-bold">Domicilio Obra Social</label>
                <input type="text" name="socialMedicineAddress" class="form-control">
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04 font-weight-bold">Fecha de Ingreso</label>
                <input type="date" name="ingreso" class="form-control" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Cargar formulario</button>
    </form>
</div>




@endsection
