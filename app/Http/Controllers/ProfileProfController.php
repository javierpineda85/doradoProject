<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile_prof;


class ProfileProfController extends Controller
{
    public function perfil(){
        return view('/admin/profesionales/perfil');
      }

    public function nuevoProfesional(){
      return view('/admin/profesionales/nuevo-profesional');
    }

    public function listadoProfesionales(Request $req ){ //lista todos los pacientes
  

      $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                  ->get();

      $vac=compact("profesionales");
      return view('/admin/profesionales/listado-de-profesionales',$vac);
      }
      
    public function listarPorMail(Request $req ){ //lista todos los usuarios por mail

        $email = $req ->get('email');
  
        $profesionales =  Profile_prof::orderBy('lastName','asc')
                  ->email($email)
                  ->paginate(10);
        $vac=compact("profesionales");
        return view('/admin/profesionales/listado-de-profesionales',$vac);
      }
   
  
    public function listarPorApellido(Request $req ){ //lista todos los pacientes por apellido
  
        $lastName = $req ->get('lastName');
  
        $profesionales =  Profile_prof::orderBy('lastName','asc')
                  ->LastName($lastName)
                  ->paginate(10);
        $vac=compact("profesionales");
        return view('/admin/profesionales/listado-de-profesionales',$vac);
      }

      public function modificarProfesional($id){

        $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                        ->where('profile_profs.user_id','=',$id)
                        ->get();
        $vac=compact("profesionales");
        return view('/admin/profesionales/gestion-de-profesional',$vac);
      }
}
