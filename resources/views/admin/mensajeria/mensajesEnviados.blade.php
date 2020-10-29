@extends('layouts.dashboard')


@section('title')
Mensajería
@endsection

@section('admin-section')
/ Mensajeria / {{$title}}
@endsection

@section('main')

<div class="row pt-md-2 mt-md-2 mb-2">
    <div class="p-2 m-2">
        <h3>Mensajería</h3>
    </div>
</div>   

<div class="row">      
    <form action="{{route('storeChat')}}" class="pt-3 col-4 border" method="post" enctype="multipart/form-data">
                    @csrf
        <div class="form-group pt-1">
            <input type="hidden" name="FromUser_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                {{Form::label('destinatario','Destinatario: ')}}
                <select name="ToUser_id" class="custom-select">
                    
                    <option value="all" selected disabled>Todos los usuarios</option>
                    @foreach($usuarios as $user)
                    
                    <option value="{{$user->id}}">{{$user->name}} {{$user->lastName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group pt-1">
            <div class="form-group">
                {{Form::label('title','Asunto: ')}}
                {{Form::text('title', null, ['class'=>'form-control',])}}
            </div>
        </div>

        <div class="form-group pt-1">
            <div class="form-group">
                {{Form::label('mensaje','Mensaje: ')}}
                <textarea name="body" class="form-control" rows="4" required></textarea>
            </div>
        </div>

        <div class="form-group pt-1">
            <div class="input-group">
                <input type="hidden" name="stop" value="{{$allUsers}}">
                <button class="btn btn-sm btn-block btn-success m-1" type="submit">Guardar</button>
                <button class="btn btn-sm btn-block btn-info m-1" type="reset" name="button">{{ __('Limpiar Campos') }}</button>
                        
            </div>
        </div>           
        
    </form> 
    <div class="col-8 pt-3 border">
        <div class="row justify-content-center col-12">
            <h4 class="bold m-2"><span>{{$title}}</span> </h4>
        </div>
    
        
        <div class="panel panel-default">
            <div class="panel-body">
               
                <ul class="chat">
                    @foreach($msn as $msj)
                    <li class="right clearfix"><span class="chat-img pull-left">
                        <label class="font-weight-italic">PARA:</label>
                        <strong class="primary-font p-3"> {{$msj->name}} {{$msj->lastName}}</strong>
                        </span>
                        <div class="chat-body clearfix mt-2">
                            <div class="header">
                                <strong class="primary-font">{{$msj->title}}</strong> <small class="pull-right text-muted">
                                <label class="font-weight-italic">Fecha y Hora:</label>
                                <span class="glyphicon glyphicon-time"></span>{{$msj->created_at}}</small>
                            </div>
                            
                            <p>
                            {{$msj->body}}
                            </p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <span class="btn btn-sm btn-info mr-3"> <a href= "{{route('msn')}}" >Recibidos</a></span>
            <span class="btn btn-sm btn-info"> <a href="{{route('msnEnviados')}}">Enviados</a></span>
        </div>

    </div> 
    
</div>           

@endsection