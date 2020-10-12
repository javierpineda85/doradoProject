<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile_prof;


class ProfileProfController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }   
  
  public function perfil(){
        return view('/admin/profesionales/perfil');
      }

    public function nuevoProfesional(){
      return view('/admin/profesionales/nuevo-profesional');
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
        return view('/admin/profesionales/listado-de-profesionales',$vac);
      }

      public function modificarProfesional($id){

        $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                        ->where('profile_profs.user_id','=',$id)
                        ->get();
        $vac=compact("profesionales");
        return view('/admin/profesionales/gestion-de-profesional',$vac);
      }

      public function store(ProfileProfStoreRequest $req){
        
        $newProfe = Profile_prof::create($req->all());

        if($req->file('file')){
            $path = Storage::disk('public')
                            ->put('image',$req->file('file'));
            $newProfe->fill(['file'=>asset($path)])->save();
        }

        return back()->with('info','El profesional ha sido creado con éxito!');
    }
}
