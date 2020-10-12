@extends('layouts.dashboard')


@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Usuarios / Modificar Usuario
@endsection

@section('main')



<div class="row justify-content-md-center">
    <div class="col-xl-6 col-sm-6 p-2 mt-5">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-user fa-3x text-info"></i>
                    <h1 class="text-center text-secondary"><span>Modificar Usuario</span></h1>
                </div>
               
                @foreach($usuarios as $usuario)
                <div class="text-left text-secondary pt-3">
                    <form action="{{route('updateUser')}}" class="pt-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="fom-group mt-1">
                            {{Form::label('name','Nombre: ')}}
                            {{Form::text('name', $usuario->name, ['class'=>'form-control',])}}
                        </div>

                        <div class="fom-group mt-1">

                            {{Form::label('name','Apellido: ')}}
                            {{Form::text('lastName', $usuario->lastName, ['class'=>'form-control',])}}
                        </div>

                        <div class="fom-group mt-1 pt-3">
                            {{Form::label('phone','Teléfono: ')}}
                            {{Form::text('phone', $usuario->phone, ['class'=>'form-control',])}}
                        </div>

                        <div class="fom-group mt-1">
                            {{Form::label('email','Correo electrónico: ')}}
                            {{Form::text('email', $usuario->email, ['class'=>'form-control',])}}
                        </div>
                        <div class="form-group mt-1 mb-3 pt-2 align-items-center">
                            {{ Form::label('group_id', 'Roles')}}
                            {{ Form::select('group_id', $groups, null, ['class'=>'form-control']) }}
                        </div>

    	                {{ Form::submit('Guardar',['class'=> 'btn btn-sm btn-success'])}}
                        {{ Form::submit('Borrar',['class'=> 'btn btn-sm btn-info'])}}
                                               
                        <form class="" action="/admin/usuarios/eliminar-usuario" method="post">
                              @csrf
                              <input type="hidden" name="id" value="$usuario->id">
                              <button type="submit" class="btn btn-sm btn-danger" onclick="deleletconfig()">Dar de Baja</button>
                        </form>
                       
                    </form>
                @endforeach
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
