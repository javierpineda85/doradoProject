<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileParentStoreRequest;
use App\Http\Requests\ProfileParentUpdateRequest;

use Illuminate\Http\Request;
use App\Profile_kid;
use App\School;
use App\Location;
use App\Profile_parent;
use App\User;
use App\History;

class ProfileParentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function searchPadre(){ //lista SOLO los profesionales que no esten dados de alta como tales pero si como users
      
        $padres = Profile_parent::rightJoin('users','profile_parents.user_id','=','users.id')
                        ->where('group_id','=','1')
                        //->where('profile_parents.profile_kid_id','=',null)
                        ->orderBy('lastName','asc')
                        ->get();
        
        $vac = compact("padres");
        return view('/admin/padres/elegir-padre',$vac);
    }

    public function listadoPadre(){
        $padres = Profile_parent::orderBy('parentLastname','asc')
                                  ->paginate(20);
        $vac =compact("padres");
        return view('/admin/padres/listado-padres',$vac);

    }

    public function listarHijos(){
    
        $id=auth()->user()->id;
   
        $pacientes =  Profile_kid::where('profile_parent_id','=',$id)
                                  ->orderBy('name','asc')
                                  ->get();
        $vac=compact("pacientes");
        
        return view('/admin/parents/listado',$vac);
    }


    
    public function historiaClinicaPadres($id){
        $pacientes = Profile_kid::where('id','=',$id)->get();
  
        $histories = History::join('users','histories.user_id','=','users.id')
                              ->where('profile_kid_id','=',$id)
                              ->where('status','=','PUBLISHED')
                              ->orderBy('date', 'DESC')
                              ->paginate(15);                      
  
        $vac=compact("pacientes","histories");
  
        return view('/admin/parents/historia-clinica',$vac);
    }
       

}
