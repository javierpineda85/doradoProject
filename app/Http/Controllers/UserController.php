<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Http\Request;
use App\User;
use App\Level;
use App\Group;

class UserController extends Controller
{
   
  public function __construct(){
    $this->middleware('auth');
  }   
  public function listadoUsuarios(Request $req ){ //lista todos los pacientes
  

        $usuarios = User::orderBy('lastName','asc')
                        ->paginate(15);
       
        $vac=compact("usuarios");
        
        return view('/admin/users/listado-de-usuarios',$vac);
        }
        
      public function listarPorMail(Request $req ){ //lista todos los usuarios por mail
  
          $email = $req ->get('email');
    
          $usuarios =  User::orderBy('lastName','asc')
                    ->email($email)
                    ->paginate(15);
          $vac=compact("usuarios");
          return view('/admin/users/listado-de-usuarios',$vac);
        }
     
    
      public function listarPorApellido(Request $req ){ //lista todos los pacientes por apellido
    
          $lastName = $req ->get('lastName');
    
          $usuarios =  User::orderBy('lastName','asc')
                    ->LastName($lastName)
                    ->paginate(15);
          $vac=compact("usuarios");
          return view('/admin/users/listado-de-usuarios',$vac);
        }
        
      public function agregarUsuario(){

        $groups = Group::orderBy('name','ASC')->pluck('name','id');
        $vac=compact("groups");
        ($groups);
        return view('/admin/users/agregar-usuario',$vac);
      }

      public function modificarUsuario($id){

        $groups = Group::orderBy('name','ASC')->pluck('name','id');
        $usuarios = User::where('id','=',$id)->get();
       
        $vac=compact("usuarios","groups");
        return view('/admin/users/modificar-usuario',$vac);
      }

      public function update(UserUpdateRequest $req, $id){
        $usuario = User::find($id);
        
        $usuario->fill($req->all())->save();

        return view('showUser')->with('info','El usuario ha sido modificado!');
    }

}
