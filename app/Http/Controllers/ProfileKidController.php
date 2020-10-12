<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileKidStoreRequest;
use App\Http\Requests\ProfileKidUpdateRequest;

use Illuminate\Http\Request;
use App\Profile_kid;
use App\School;
use App\Location;
use App\Profile_parent;

class ProfileKidController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  } 

  public function nuevoPaciente(){
    return view('/admin/pacientes/nuevo-paciente');
  }

  /* LISTADOS DE PACIENTES*/
  
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

        $pacientes = Profile_kid::find($id);
        $escuela = School::join("profile_kids","schools.profile_kid_id","=","profile_kids.id")
                        ->where("schools.profile_kid_id","=",$id)
                        ->get();
        $domicilio = Location::join("profile_kids","locations.profile_kid_id","=","profile_kids.id")
                                ->where("locations.profile_kid_id","=",$id)
                                ->get();
        $padres = Profile_parent::Join("profile_kids","profile_parents.profile_kid_id","=","profile_kids.id")
                                ->where("profile_parents.profile_kid_id","=",$id)
                                ->get();
                                
        $vac=compact("pacientes", "escuela","domicilio", "padres");
        return view('/admin/pacientes/gestion-de-pacientes',$vac);
      }
      public function evolucionarPaciente($id){

        $pacientes = Profile_kid::where('id','=',$id)->get();
                               
        $vac=compact("pacientes");
        return view('/admin/pacientes/evolucionar-paciente',$vac);
      }

      public function historiaClinica($id){
        $pacientes = Profile_kid::where('id','=',$id)->get();
                                        
        $vac=compact("pacientes");

        return view('/admin/pacientes/historia-clinica',$vac);
      }
      
}
