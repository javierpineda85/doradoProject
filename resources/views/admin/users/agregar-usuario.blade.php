@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Usuarios / Agregar Usuario
@endsection

@section('main')


<div class="row justify-content-md-center">
    <div class="col-xl-8 col-sm-8 p-2 mt-5">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-user fa-3x text-info"></i>
                    <h1 class="text-center text-secondary"><span>Agregar Usuario</span></h1>
                </div>
                <div class="text-left text-secondary pt-3">
                    <form action="{{ route('storeUser') }}" class="pt-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="fom-group mt-1 col-6">
                                {{Form::label('name','Nombre: ')}}
                                {{Form::text('name', null, ['class'=>'form-control',])}}
                            </div>

                            <div class="fom-group mt-1 col-6">

                                {{Form::label('name','Apellido: ')}}
                                {{Form::text('lastName', null, ['class'=>'form-control',])}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="fom-group mt-1 col-6">
                                {{Form::label('email','Correo electrónico: ')}}
                                {{Form::text('email', null, ['class'=>'form-control',])}}
                            </div>

                            <div class="fom-group mt-1 col-6">
                                {{Form::label('password','Contraseña: ')}} <br>
                                {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="fom-group mt-1 col-6">
                                {{Form::label('phone','Teléfono: ')}}
                                {{Form::text('phone', null, ['class'=>'form-control',])}}
                            </div>
                            <div class="form-group mt-1 col-6">
                                {{ Form::label('group_id', 'Roles')}}
                                {{ Form::select('group_id', $groups, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end col-md-6 offset-md-6 ">
                            {{ Form::submit('Guardar',['class'=> 'btn btn-sm btn-success w-50'])}}
                            {{ Form::reset('Borrar',['class'=> 'btn btn-sm btn-info w-50'])}}
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection