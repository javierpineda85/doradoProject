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
                    <form action="#" class="pt-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nombre" class="form-label pt-3 mr-3">Nombre:</label>
                            <input id="title" type="text" class="" name="title" value="">
                        </div>

                        <div class="mt-1">

                            <label for="nombre" class="form-label pt-3 mr-3">Apellido:</label>
                            <input id="title" type="text" class="" name="lastname" value="">
                        </div>

                        <div class="mt-1 pt-3">
                            <label for="nombre" class="form-label pt-3 mr-3">Teléfono:</label>
                            <input id="title" type="text" class="" name="phone" value="">
                        </div>

                        <div class="mt-1">
                            <label for="nombre" class="form-label pt-3 mr-3">Email:</label>
                            <input id="title" type="text" class="" name="lastname" value="">
                        </div>
                        <div class="mt-1 mb-3 pt-2 align-items-center">
                            <label for="nombre" class="form-label pt-3 mr-3">Asignar Rol:</label>
                            <input id="title" type="text" class="w-auto" name="level" value="">
                        </div>
                        <button class="btn btn-success" type="submit" name="button">
                            Actualizar
                        </button>
                        <button class="btn btn-info" type="reset" name="button">
                            Limpiar Campos
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
