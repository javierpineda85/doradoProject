@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Usuarios / Agregar Usuario
@endsection

@section('main')


<div class="row justify-content-md-center">
    <div class="col-xl-6 col-sm-6 p-2 mt-5">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-user fa-3x text-info"></i>
                    <h1 class="text-center text-secondary"><span>Agregar Usuario</span></h1>
                </div>
                <div class="text-left text-secondary pt-3">
                    <form action="{{ route('storeUser') }}" class="pt-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="fom-group mt-1">
                            {{Form::label('name','Nombre: ')}}
                            {{Form::text('name', null, ['class'=>'form-control',])}}
                        </div>

                        <div class="fom-group mt-1">

                            {{Form::label('name','Apellido: ')}}
                            {{Form::text('lastName', null, ['class'=>'form-control',])}}
                        </div>

                        <div class="fom-group mt-1 ">
                            {{Form::label('email','Correo electrónico: ')}}
                            {{Form::text('email', null, ['class'=>'form-control',])}}
                        </div>

                        <div class="fom-group mt-1">
                            {{Form::label('password','Contraseña: ')}} <br>
                            {{Form::password('password', null, ['class'=>'form-control',])}}
                        </div>
                        <div class="fom-group mt-1">
                            {{Form::label('phone','Teléfono: ')}}
                            {{Form::text('phone', null, ['class'=>'form-control',])}}
                        </div>
                        <div class="form-group mt-1">
                            {{ Form::label('group_id', 'Roles')}}
                            {{ Form::select('group_id', $groups, null, ['class'=>'form-control']) }}
                        </div>

    	                {{ Form::submit('Guardar',['class'=> 'btn btn-sm btn-success'])}}
                        {{ Form::submit('Borrar',['class'=> 'btn btn-sm btn-info'])}}
                        

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection