@extends('layouts.dashboard')


@section('title')
Nuevo Profesional
@endsection

@section('admin-section')
/ Gestión de profesional
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Gestión de Profesional</h3>
    </div>

    <!-- INICIO DE FORMULARIO -->
    @foreach($profesionales as $profesional)
    <form class="needs-validation" novalidate>
        
        <!-- DATOS PERSONALES -->

        <h4 class="pt-2 pb-2 m-2">Datos Personales</h4>
        
        <div class="form-row"> <!-- Nombres / Apellidos -->
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nombres </label>
                <input type="text" class="form-control" id="validationTooltip01" value="{{$profesional->name}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Apellidos</label>
                <input type="text" class="form-control" id="validationTooltip02" value="{{$profesional->lastName}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- DNI / CUIL / Fecha de nac -->
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">D.N.I.</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" value="{{$profesional->dni}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">C.U.I.L./C.U.I.T.</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" value="{{$profesional->cuil}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Fecha de Nac.</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="validationTooltipUsername" value="{{$profesional->birthday}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-row"> <!-- calle / nro / depto -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Calle / Barrio</label>
                <input type="text" class="form-control" id="validationTooltip03" value="Calle / Barrio" required>
                <div class="invalid-tooltip">
                    Por favor completa con la calle o barrio.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Número / Manzana</label>
                <input type="text" class="form-control" id="validationTooltip04" value="Número / Manzana" required>
                <div class="invalid-tooltip">
                    Recuerda colocar la altura o manzana.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Depto / Casa</label>
                <input type="text" class="form-control" id="validationTooltip05" value="Casa" required>
                <div class="invalid-tooltip">
                    Recuerda colocar también el departamento o casa.
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- telefono / mail -->

            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Teléfono de Contacto</label>
                <input type="text" class="form-control" id="validationTooltip04" value="{{$profesional->phone}}" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
            
            <div class="col-md-9 mb-3">
                <label for="validationTooltip05">Email</label>
                <input type="text" class="form-control" id="validationTooltip05" value="{{$profesional->email}}" required>
                <div class="invalid-tooltip">
                    El teléfono de urgencias también es importante tenerlo.
                </div>
            </div>
            
        </div>
    
        <div class="form-row"> <!-- foto -->
            <div class="custom-file col-md-4 mb-3">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Subir Foto</label>
            </div>
        </div>

         <!-- DATOS PROFESIONALES -->

        <div class="form-row">
            <h4 class="pt-2 pb-2 m-2">Datos Profesionales</h4>
        </div>
            
        <div class="form-row"> <!-- Especialidad -->
            <div class="col-md-10 mb-2">
                <label for="validationTooltipUsername">Especialidad</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" value="{{$profesional->specialty}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor no te olvides de completar aquí.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- Matricula / fecha venc / RNP / fecha venc -->
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Matricula</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" value="{{$profesional->matricula}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Fecha de Venc.</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="validationTooltipUsername" value="{{$profesional->venc_matricula}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">R.N.P</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationTooltipUsername" value="{{$profesional->rnp}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Fecha de Venc.</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="validationTooltipUsername" value="{{$profesional->venc_rnp}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Modificar</button>
        <button class="btn btn-danger" type="submit">Eliminar</button>
        
    </form>
    @endforeach
</div>




@endsection
