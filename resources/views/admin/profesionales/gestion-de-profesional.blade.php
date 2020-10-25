@extends('layouts.dashboard')


@section('title')
Gestión de Profesional
@endsection

@section('admin-section')
/Profesionales/Gestión de profesional
@endsection

@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="p-3 m-3">
        <h3>Gestión de Profesional</h3>
        
    </div>

    <!-- INICIO DE FORMULARIO -->
    <div class="row">
    @foreach($profesionales as $profe)
    <form action="/admin/profesionales/modificar-profesional-{{$profe->id}}" class="pt-3" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- DATOS PERSONALES -->

        <h4 class="pt-2 pb-2 m-2">Datos Personales</h4>
        
        <div class="form-row"> <!-- Nombres / Apellidos -->
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nombres </label>
                <input type="hidden" name="user_id" value="{{$profe->id}}">
                <input type="text" name ="name" class="form-control" id="validationTooltip01" value="{{$profe->name}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Apellidos</label>
                <input type="text" name ="lastName" class="form-control" id="validationTooltip02" value="{{$profe->lastName}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- DNI / CUIL / Fecha de nac -->
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">D.N.I.</label>
                <div class="input-group">
                    <input type="text" name ="dni" class="form-control" id="validationTooltipUsername" value="{{$profe->dni}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">C.U.I.L./C.U.I.T.</label>
                <div class="input-group">
                    <input type="text" name ="cuil" class="form-control" id="validationTooltipUsername" value="{{$profe->cuil}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Fecha de Nac.</label>
                <div class="input-group">
                    <input type="date" name ="birthday" class="form-control" id="validationTooltipUsername" value="{{$profe->birthday}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-row"> <!-- calle / nro / depto -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Calle / Barrio</label>
                <input type="text" name ="street" class="form-control" id="validationTooltip03" value="{{$profe->street}}" required>
                <div class="invalid-tooltip">
                    Por favor completa con la calle o barrio.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Número / Manzana</label>
                <input type="text" name ="street_number" class="form-control" id="validationTooltip04" value="{{$profe->street_number}}" required>
                <div class="invalid-tooltip">
                    Recuerda colocar la altura o manzana.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Depto / Casa</label>
                <input type="text" name ="street_house" class="form-control" id="validationTooltip05" value="{{$profe->street_house}}" required>
                <div class="invalid-tooltip">
                    Recuerda colocar también el departamento o casa.
                </div>
            </div>
        </div>

        <div class="form-row"> <!-- localidad / provincia -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Localidad</label>
                <input name ="locality" type="text" class="form-control" id="validationTooltip03" value="{{$profe->locality}}"required>
                <div class="invalid-tooltip">
                    Por favor completa con la localidad.
                </div>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Provincia</label>
                <input name ="city" type="text" class="form-control" id="validationTooltip04" value="{{$profe->city}}"required>
                <div class="invalid-tooltip">
                    Recuerda colocar la provincia.
                </div>
            </div>
        </div>
        <div class="form-row"> <!-- telefono / mail -->

            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Teléfono de Contacto</label>
                <input type="text" name ="phone" class="form-control" id="validationTooltip04" value="{{$profe->phone}}" required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
            
            <div class="col-md-9 mb-3">
                <label for="validationTooltip05">Email</label>
                <input type="text" name="email" class="form-control" id="validationTooltip05" value="{{$profe->email}}" required>
                <div class="invalid-tooltip">
                    El teléfono de urgencias también es importante tenerlo.
                </div>
            </div>
            
        </div>
    
        <div class="form-row"> <!-- foto -->
            <div class="custom-file col-md-4 mb-3">
                <input type="file" name="file" class="custom-file-input" id="customFileLang" lang="es">
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
                    <input type="text" name ="specialty" class="form-control" id="validationTooltipUsername" value="{{$profe->specialty}}" aria-describedby="validationTooltipUsernamePrepend" required>
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
                    <input type="text" name ="matricula" class="form-control" id="validationTooltipUsername" value="{{$profe->matricula}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Fecha de Venc.</label>
                <div class="input-group">
                    <input type="date" name ="venc_matricula" class="form-control" id="validationTooltipUsername" value="{{$profe->venc_matricula}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">R.N.P</label>
                <div class="input-group">
                    <input type="text" name ="rnp" class="form-control" id="validationTooltipUsername" value="{{$profe->rnp}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Fecha de Venc.</label>
                <div class="input-group">
                    <input type="date" name ="venc_rnp" class="form-control" id="validationTooltipUsername" value="{{$profe->venc_rnp}}" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-sm btn-success" type="submit">Modificar</button>
        
    </form>
    </div>
    <div class="row">
    <form class="pt-3" action="/admin/profesionales/eliminar-profesional-{{$profe->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$profe->id}}">
        <button type="submit" class="btn btn-sm btn-danger">Dar de Baja</button>
    </form>
    </div>
    @endforeach
</div>




@endsection
