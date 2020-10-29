<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
use App\Chat;

class ChatController extends Controller
{
    public function index(){
        $id = \Auth::user()->id;
        
        $usuarios = User::where('baja','=','ACTIVE')                                
                        ->where('group_id','!=','1')
                        ->where('group_id','!=','6')
                        ->orderBy('lastName','asc')
                        ->get();
                      
        $allUsers = count($usuarios); // para saber ctos usuarios hay en la lista
        
        $msn = Chat::join('users','chats.FromUser_id','=','users.id')
                    ->where('chats.ToUser_id','=',$id)
                    ->orderBy('chats.created_at', 'DESC')
                    ->get();
        $title= "Mensajes Recibidos";
        $vac=compact("usuarios","msn","allUsers","title");
        return view('/admin/mensajeria/mensajes',$vac);
    }

    public function store(Request $req){
        $id = \Auth::user()->id;
        
        $stop = $req->stop;
        
       /* if($req->ToUser_id == 'all'){
          
           for($i=0; $i<$stop; $i++){

            $newChat = Chat::create($req->all());
            
            }
        }else{

            $newNovedad = Chat::create($req->all());
        } */
        $newChat = Chat::create($req->all());
        
        $usuarios = User::where('baja','=','ACTIVE')                                
                        ->where('group_id','!=','1')
                        ->where('group_id','!=','6')
                        ->orderBy('lastName','asc')
                        ->get();
                      
        $allUsers = count($usuarios); // para saber ctos usuarios hay en la lista
        
        $msn = Chat::join('users','chats.FromUser_id','=','users.id')
                    ->where('chats.ToUser_id','=',$id)
                    ->orderBy('chats.created_at', 'DESC')
                    ->get();

        $title= "Mensajes Recibidos";
        $vac=compact("usuarios","msn","allUsers","title");

        return back()->with('info','Mensaje Enviado',$vac);
    }

    public function enviados(){
        $id = \Auth::user()->id;
        
        $usuarios = User::where('baja','=','ACTIVE')                                
                        ->where('group_id','!=','1')
                        ->where('group_id','!=','6')
                        ->orderBy('lastName','asc')
                        ->get();
                      
        $allUsers = count($usuarios); // para saber ctos usuarios hay en la lista
        
        $msn = Chat::join('users','chats.ToUser_id','=','users.id')
                    ->where('chats.FromUser_id','=',$id)
                    ->orderBy('chats.created_at', 'DESC')
                    ->get();

        $title= "Mensajes Enviados";
        $vac=compact("usuarios","msn","allUsers","title");
        return view('/admin/mensajeria/mensajesEnviados',$vac);
    }
}
