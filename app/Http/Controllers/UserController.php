<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;

class UserController extends Controller
{
   
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
                    ->paginate(10);
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
        return view('/admin/users/agregar-usuario');
      }

      public function modificarUsuario($id){

        $usuarios = User::where('id','=',$id)->get();
        $vac=compact("usuarios");
        return view('/admin/users/modificar-usuario',$vac);
      }

}
