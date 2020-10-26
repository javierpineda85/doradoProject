<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileKidStoreRequest;
use App\Http\Requests\ProfileKidUpdateRequest;

use Illuminate\Http\Request;
use App\Profile_kid;
use App\School;
use App\Location;
use App\Profile_parent;
use App\User;

class ProfileKidController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  } 

  public function nuevoPaciente($id){
    
    $padres = User::where('id','=',$id)
                    ->get();

    $vac = compact("padres");
      
    return view('/admin/pacientes/nuevo-paciente',$vac);
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

 /* MODIFICAR PACIENTES*/  
  
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

 /* EVOLUCIONAR PACIENTES*/  

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

 /* STORE PACIENTES*/ 

  public function store(Request $req){ // Funcion de guardar con el constructor de esta forma porque no funcionaba de otra
    
    $profile_kid_id = Profile_kid::all()->last();
       
    if($profile_kid_id = NULL){
      $profile_kid_id = "1";
    }
    else{
      $profile_kid_id = $profile_kid_id + 1;
    }
    
    //Crea registro de paciente en DB
    $newkid = [
        'profile_parent_id'  => $req->user_id,
        'name'               => $req->name,
        'lastName'           => $req->lastName,
        'file'               => $req->file,
        'dni'                => $req->dni,
        'genre'              => $req->genre,
        'birthday'           => $req->birthday,
        'diagnostic'         => $req->diagnostic,
        'socialMedicine'     => $req->socialMedicine,
        'afiliado'           => $req->afiliado,
        'ingreso'            => $req->ingreso,
        'baja'               => 'ACTIVE'
    ];
    
    $kid = Profile_kid::create($newkid);
      
     //Crea registro de padre en DB
     $newkidParent = [
      'user_id'           => $req->user_id,
      'profile_kid_id'    => $profile_kid_id,
      'parentName'        => $req->parentName,
      'parentLastname'    => $req->parentLastname,
      'numberPhone'       => $req->numberPhone,
      'phone2'            => $req->phone2,
      'parentDni'         => $req->dni_parent,
      'baja'              => 'ACTIVE'
    ];
    
    $parentUpdate = Profile_parent::create($newkidParent);

    //Crea registro de domicilio en DB
    $newKidLocation = [
        'profile_kid_id'     => $profile_kid_id,
        'street'             => $req->street,
        'street_number'      => $req->street_number,
        'street_house'       => $req->street_house,
        'locality'           => $req->locality,
        'city'               => $req->city
    ];
    
    $kidLocation = Location::create($newKidLocation); 
    
    //Crea registro de escuela en DB
    $newKidSchool = [
        'profile_kid_id'     => $profile_kid_id,
        'school_name'        => $req->school_name,
        'school_level'       => $req->school_level,
        'school_turn'        => $req->school_turn,
        'schedule'           => $req->schedule,
        'street'             => $req->street,
        'street_number'      => $req->street_number,
        'locality'           => $req->street_locality,
        'city'               => $req->street_city,
        'contact_name'       => $req->school_contact_name,
        'contact_phone'      => $req->school_contact_phone
    ];


    $kidSchool = School::create($newKidSchool); 

    return back()->with('info','El paciente ha sido dado de alta con éxito!');
  }  
}
