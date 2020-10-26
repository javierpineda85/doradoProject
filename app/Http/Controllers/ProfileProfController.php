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
  
    public function nuevoProfesional($id){
      $profesionales = User::where('id','=',$id)
                            ->get();

      $vac = compact("profesionales");
     
      return view('/admin/profesionales/nuevo-profesional',$vac);
    }

    public function searchProfe(){ //lista SOLO los profesionales que no esten dados de alta como tales pero si como users
      
      $profesionales = Profile_prof::rightJoin('users','profile_profs.user_id','=','users.id')
                      ->where('group_id','=','2')
                      ->where('profile_profs.user_id','=',null)
                      ->where('users.baja','=','ACTIVE')
                      ->orderBy('lastName','asc')
                      ->get();
      
      $vac = compact("profesionales");
      return view('/admin/profesionales/elegir-profesional',$vac);
    }

    public function listado(Request $req ){ //lista todos los profesionales
  
      $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                                      ->where('profile_profs.baja','!=','DOWN')                                
                                      ->orderBy('lastName','asc')
                                      ->paginate(15);            
                                      

      $vac=compact("profesionales");
      return view('/admin/profesionales/listado-de-profesionales',$vac);
  }
      
    public function listarPorMail(Request $req ){ 

        $email = $req ->get('email');
  
        $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                                ->email($email)
                                ->where('profile_profs.baja','!=','DOWN')                                
                                ->orderBy('lastName','asc')
                                ->paginate(15); 

        $vac=compact("profesionales");
        return view('/admin/profesionales/listado-de-profesionales',$vac);
    }
   
  
    public function listarPorApellido(Request $req ){ 
  
        $lastName = $req ->get('lastName');

        $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                                  ->LastName($lastName)
                                  ->where('profile_profs.baja','!=','DOWN')                                
                                  ->orderBy('lastName','asc')
                                  ->paginate(15); 
        
        $vac=compact("profesionales");
        return back()->with($vac);
    }

    public function modificarProfesional($id){

        $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                        ->where('profile_profs.user_id','=',$id)
                        ->get();
                        
        $vac=compact("profesionales");
        return view('/admin/profesionales/gestion-de-profesional',$vac);
    }

    public function update(Request $req, $id){
        
        $newUser=[
          'group_id'     => $req->group_id,
          'name'         => $req->name,
          'lastName'     => $req->lastName,
          'phone'        => $req->phone,
          'email'        => $req->email,
          'password'     => bcrypt($req->password),
          'baja'         => 'ACTIVE'
        ];
        
        $user = User::where('id',$id)->update($newUser);
        
        $profesionales = Profile_prof::find($id);
       
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
      
      $Profe = Profile_prof::where('user_id',$id)->update($newProfe);

      if($req->file('file')){
        $path = Storage::disk('public')
                        ->put('image',$req->file('file'));
        $newProfe->fill(['file'=>asset($path)])->save();
      }
        
      $profesionales = Profile_prof::join("users","profile_profs.user_id","=","users.id")
                                      ->orderBy('lastName','asc')
                                      ->paginate(15); 

      $vac=compact("profesionales");
      return view('/admin/profesionales/listado-de-profesionales',$vac)->with('info','El usuario ha sido modificado!');
    }

    public function store(Profile_profStoreRequest $req){ // Funcion de guardar con el constructor de esta forma porque no funcionaba de otra
       
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
       
        if($req->file('file')){
          $path = Storage::disk('public')
                          ->put('image',$req->file('file'));
          $newProf->fill(['file'=>asset($path)])->save();
      }
        return back()->with('info','El Profesional has sido creado con exito!');
    }

    public function delete(Request $req, $id){
      
      $profe = Profile_prof::where('user_id','=',$id)->get();
     
      $newProfe = [
          'baja'=> 'DOWN'
      ];
    
      $Profe = Profile_prof::where('user_id','=',$id)->update($newProfe);


      $newUser=[
          'baja' => 'DOWN'
      ];
      
      $user = User::where('id',$id)->update($newUser);
            
      $usuarios = User::orderBy('lastName','asc')
                    ->where('baja','=','ACTIVE')
                    ->paginate(15);

      $vac=compact("usuarios");
      return view('/admin/users/listado-de-usuarios',$vac)->with('info','El usuario ha sido modificado!');
    }


}
