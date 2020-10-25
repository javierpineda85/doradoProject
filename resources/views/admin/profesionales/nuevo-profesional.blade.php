@extends('layouts.dashboard')


@section('title')
Nuevo Profesional
@endsection

@section('admin-section')
/ Profesionales/ Alta Profesionales
@endsection

@section('main')

<div class="row pt-md-2 mt-md-2 mb-2">
    <div class="p-2 m-2">
        <h3>Alta de Profesional</h3>
    </div>
</div>

<div class="row">
    <!-- INICIO DE FORMULARIO -->

    <form  action="{{route('storeProfe')}}" class="pt-3 mr-3 pr-2" method="post" enctype="multipart/form-data">
        @csrf
        <!-- DATOS PERSONALES -->

        <h4 class="pt-2 pb-2 m-2">Datos Personales</h4>

        <div class="form-row">

        </div>
    

        <div class="form-row"> <!-- Nombres / Apellidos -->
       
        @foreach($profesionales as $profe)
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nombres</label>
                <input type="hidden" name="user_id" value="{{$profe->id}}">
                <input name ="name" type="text" class="form-control" id="name" value="{{$profe->name}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Apellidos</label>
                <input name ="lastName" type="text" class="form-control" id="lastName"  value="{{$profe->lastName}}" required>
                <div class="valid-tooltip">
                    Correcto!
                </div>
            </div>
        
        </div>

        <div class="form-row"> <!-- DNI / CUIL / Fecha de nac -->
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">D.N.I.</label>
                <div class="input-group">
                    <input name ="dni" type="text" class="form-control" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">C.U.I.L./C.U.I.T.</label>
                <div class="input-group">
                    <input name ="cuil" type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" palceholder="Solo números" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Fecha de Nac.</label>
                <div class="input-group">
                    <input name ="birthday" type="date" class="form-control" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-row"> <!-- calle / nro / depto -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Calle / Barrio</label>
                <input name ="street" type="text" class="form-control" id="validationTooltip03"  required>
                <div class="invalid-tooltip">
                    Por favor completa con la calle o barrio.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Número / Manzana</label>
                <input name ="street_number" type="text" class="form-control" id="validationTooltip04"  required>
                <div class="invalid-tooltip">
                    Recuerda colocar la altura o manzana.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Depto / Casa</label>
                <input name ="street_house" type="text" class="form-control" id="validationTooltip05" >
            </div>
        </div>
        <div class="form-row"> <!-- localidad / provincia -->
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Localidad</label>
                <input name ="locality" type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Por favor completa con la localidad.
                </div>
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Provincia</label>
                <input name ="city" type="text" class="form-control" id="validationTooltip04" required>
                <div class="invalid-tooltip">
                    Recuerda colocar la provincia.
                </div>
            </div>

        </div>
        <div class="form-row"> <!-- telefono / mail -->

            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Teléfono de Contacto</label>
                <input name ="phone" type="text" class="form-control" id="validationTooltip04" value="{{$profe->phone}}"required>
                <div class="invalid-tooltip">
                    Este campo también debes completarlo.
                </div>
            </div>
            
            <div class="col-md-9 mb-3">
                <label for="validationTooltip05">Email</label>
                <input name="email" type="text" class="form-control" id="validationTooltip05" value="{{$profe->email}}" required>
                <div class="invalid-tooltip">
                    El teléfono de urgencias también es importante tenerlo.
                </div>
            </div>
            
        </div>
    
        <div class="form-row"> <!-- foto -->
            <div class="custom-file col-md-4 mb-3">
                <input name="file" type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Subir Foto</label>
            </div>
        </div>

         <!-- DATOS PROFESIONALES -->

        <div class="form-row">
            <h4 class="pt-2 pb-2 m-2">Datos Profesionales</h4>
        </div>
            
        <div class="form-row"> <!-- Especialidad -->
            <div class="col-md-12 mb-2">
                <label for="validationTooltipUsername">Especialidad</label>
                <div class="input-group">
                    <input name ="specialty" type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                    <input name ="matricula" type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Fecha de Venc.</label>
                <div class="input-group">
                    <input name ="venc_matricula" type="date" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">R.N.P</label>
                <div class="input-group">
                    <input name ="rnp" type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Por favor ingresa todo junto sin espacio.
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="validationTooltipUsername">Fecha de Venc.</label>
                <div class="input-group">
                    <input name ="venc_rnp" type="date" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    No te olvides de llenar este campo.
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <button class="btn btn-sm btn-primary" type="submit">Cargar formulario</button>
    
    </form>
</div>




@endsection
