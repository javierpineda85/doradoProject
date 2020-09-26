@extends('layouts.dashboard')


@section('title')
Cargar Historia Clinica
@endsection

@section('admin-section')
/Gestion de pacientes
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Nueva Historia Clínica</h3>
    </div>

    <!-- INICIO DE FORMULARIO -->
    @foreach($pacientes as $paciente)
    <form class="needs-validation" novalidate>

        <!-- DATOS PERSONALES -->

        <h4 class="pt-2 pb-2 m-2">Datos Personales {{$paciente->id}} </h4>
        
        <div class="form-row"> <!-- Nombres y apellidos -->
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nombres</label>
                <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombres" value="{{$paciente->name}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Apellidos</label>
                <input type="text" class="form-control" id="validationTooltip02" placeholder="Apellidos" value="{{$paciente->lastName}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        </div>

        <div class="form-row"> <!--DNI, genero, fecha de nacimiento -->
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">D.N.I.</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="D.N.I." value="{{$paciente->dni}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Género</label>
                <select class="custom-select" value="{{$paciente->genre}}">

                    <option value="m">Masculino</option>
                    <option value="f">Femenino</option>
                    <option value="o">Otro</option>
                </select>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Fecha de Nac.</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="validationTooltipUsername" placeholder="30/02/2000" value="{{$paciente->birthday}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-row"> <!-- calle, altura, depto -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Calle / Barrio</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Calle / Barrio" required>
                <div class="invalid-tooltip">
                    Por favor completa con la calle o barrio.
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Número / Manzana</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="Número / Manzana" required>
                <div class="invalid-tooltip">
                    Recuerda colocar la altura o manzana.
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltip05">Depto / Casa</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="Casa" required>
                <div class="invalid-tooltip">
                    Recuerda colocar también el departamento o casa.
                </div>
            </div>
        </div>

        <div class="form-row">  <!-- Nro contacto y nro emergencia -->

            <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Teléfono de Contacto</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="2619876543" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip05">Teléfono de emergencia</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="2619876543" required>
                <div class="invalid-tooltip">
                    El teléfono de urgencias también es importante tenerlo.
                </div>
            </div>
            
        </div>
        <div class="form-row">  <!-- Nombre Responsable legar y DNI -->
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Nombe del Responsable Legal</label>
                <input type="text" class="form-control" id="validationTooltip02" placeholder="Nombres y apellidos" value="" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
            
            <div class="col-md-3 mb-2">
                <label for="validationTooltipUsername">D.N.I.</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="D.N.I." aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        </div>
    
        <div class="form-row">  <!-- Diagnostico Clinico / Foto perfil -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip02">Diagnóstico Clínico</label>
                <input type="text" class="form-control" id="validationTooltip02" placeholder="Diagnóstico" value="{{$paciente->diagnostic}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- Foto -->
            <div class="custom-file col-md-4 mb-3">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Subir Foto</label>
            </div>
        </div>

         <!-- DATOS ESCOLARES -->

        <div class="form-row">
            <h4 class="pt-2 pb-2 m-2">Datos Escolares</h4>
        </div>
            
        <div class="form-row"> <!-- Nombres escuela -->
            <div class="col-md-8 mb-2">
                <label for="validationTooltipUsername">Escuela</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Nombre y Nº de la escuela" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor no te olvides de completar aquí.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">  <!-- Nivel / Turno / Horario -->
            <div class="col-md-4 mb-2">
                <label for="validationTooltip02">Nivel</label>
                <select class="custom-select">
                    <option value="i">Inicial</option>
                    <option value="p">Primario</option>
                    <option value="s">Secundario</option>
                </select>
            </div>

            <div class="col-md-4 mb-2">
                <label for="validationTooltip02">Turno</label>
                <select class="custom-select">
                    <option value="m">Mañana</option>
                    <option value="t">Tarde</option>
                    <option value="v">Vespertino</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Horario:</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="07:40-12:45" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- Domicilio y telefono -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03">Domicilio de la escuela</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Domicilio" required>
                <div class="invalid-tooltip">
                    Por favor completa el domicilio de la escuela.
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Teléfono</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="2619876543" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- Referente nombre y telefono -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03">Referente de Contacto</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Nombre y Apellido" required>
                <div class="invalid-tooltip">
                    Por favor completa el referente de contacto.
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Teléfono</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="2619876543" required>
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
                <label for="validationTooltipUsername">Obra Social</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Nombre Obra Social" value="{{$paciente->socialMedicine}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor no te olvides de completar aquí.
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <label for="validationTooltipUsername">Nº de afiliado</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="xx-xxxxxxxx-x" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>

        </div>

        <div class="form-row"> <!-- Domicilio / fecha de ingreso -->
            <div class="col-md-8 mb-3">
                <label for="validationTooltip03">Domicilio Obra Social</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Domicilio" required>
                <div class="invalid-tooltip">
                    Por favor completa el domicilio.
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Fecha de Ingreso</label>
                <input type="date" class="form-control" id="validationTooltip04" placeholder="30/02/2000" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Modificar</button>
        <button class="btn btn-danger" type="submit">Eliminar</button>
    </form>
    @endforeach
</div>




@endsection
