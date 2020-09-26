<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile_kid;

class ProfileKidController extends Controller
{
    public function listadoPaciente(Request $req ){ //lista todos los pacientes
  
        $pacientes =  Profile_kid::orderBy('lastName','asc')
                  ->paginate(10);
        $vac=compact("pacientes");
        return view('/admin/pacientes/listado-de-pacientes',$vac);
      }

  
      public function listarPorApellido(Request $req ){ //lista todos los pacientes por apellido
  
        $lastName = $req ->get('lastName');
  
        $pacientes =  Profile_kid::orderBy('lastName','asc')
                  ->LastName($lastName)
                  ->paginate(10);
        $vac=compact("pacientes");
        return view('/admin/pacientes/listado-de-pacientes',$vac);
      }

      public function modificarPaciente($id){

        $pacientes = Profile_kid::join("profile_parents","profile_kids.profile_parent_id","=","profile_parents.profile_kid_id")
                        ->where('profile_kids.profile_parent_id','=',$id)
                        ->get();
        $vac=compact("pacientes");
        return view('/admin/pacientes/gestion-de-pacientes',$vac);
      }
}
