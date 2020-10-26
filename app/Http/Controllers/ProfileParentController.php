<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileParentStoreRequest;
use App\Http\Requests\ProfileParentUpdateRequest;

use Illuminate\Http\Request;
use App\Profile_parent;
use App\User;

class ProfileParentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function searchPadre(){ //lista SOLO los profesionales que no esten dados de alta como tales pero si como users
      
        $padres = Profile_parent::rightJoin('users','profile_parents.user_id','=','users.id')
                        ->where('group_id','=','1')
                        ->where('profile_parents.profile_kid_id','=',null)
                        ->orderBy('lastName','asc')
                        ->get();
        
        $vac = compact("padres");
        return view('/admin/padres/elegir-padre',$vac);
    }

}
