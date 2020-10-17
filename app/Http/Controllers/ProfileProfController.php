<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\Profile_profStoreRequest;
use App\Http\Requests\Profile_profUpdateRequest;

use App\User;
use App\Profile_prof;
use App\Group;


class ProfileProfController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }   
  
  public function perfil(){
        return view('/admin/profesionales/perfil');
      }

    public function nuevoProfesional($id){
      $profesionales = User::where('id','=',$id)
                            ->get();

      $vac = compact("profesionales");
     
      return view('/admin/profesionales/nuevo-profesional',$vac);
    }

    public function searchProfe(){
      
      $profesionales = Profile_prof::rightJoin('users','profile_profs.user_id','=','users.id')
                      ->where('group_id','=','2')
                      ->where('profile_profs.user_id','=',null)
                      ->orderBy('lastName','asc')
                      ->get();
      
      $vac = compact("profesionales");
      return view('/admin/profesionales/elegir-profesional',$vac);
    }

    public function listado(Request $req ){ //lista todos los pacientes
  
      $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                                      ->paginate(15);            
                                      

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
        return back()->with($var);
      }

      public function modificarProfesional($id){

        $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                        ->where('profile_profs.user_id','=',$id)
                        ->get();
        $vac=compact("profesionales");
        return view('/admin/profesionales/gestion-de-profesional',$vac);
      }

      public function store(Profile_profStoreRequest $req){
       
      
        $newProfe = [
          'user_id'         => $req->user_id,
          'dni'             => $req->dni,
          'cuil'            => $req->cuil,
          'birthday'        => $req->birthday,
          'street'          => $req->street,
          'street_number'   => $req->street_number,
          'street_house'    => $req->street_house,
          'locality'        => $req->locality,
          'city'            => $req->city,                 
          'phone'           => $req->phone,
          'file'            => $req->file,
          'specialty'       => $req->specialty,
          'matricula'       => $req->matricula,
          'venc_matricula'  => $req->venc_matricula,
          'rnp'             => $req->rnp,
          'venc_rnp'        => $req->venc_rnp,
          'baja'            => false
      ];
      
        $Profe = Profile_prof::create($newProfe);

        return back()->with('info','El Profesional has sido creado con exito!');
    }
}
