<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile_kid;
class AdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }  
  public function index(){
    //return view('admin/admin');
    $grupo = auth()->user()->group_id;
    if ($grupo == '1'){ //grupo 1 es padres
         
        $id=auth()->user()->id;
   
        $pacientes =  Profile_kid::where('profile_parent_id','=',$id)
                                  ->orderBy('name','asc')
                                  ->get();
        $vac=compact("pacientes");
        
      return view('admin/dashboard-padre',$vac);
    
    }elseif ($grupo == '2') { //grupo 2 es profesionales
      return view('admin/dashboard-profe');
    }else{
      return view('admin/dashboard');
    }
  }

 

}