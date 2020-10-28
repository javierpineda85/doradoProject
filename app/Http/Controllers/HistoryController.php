<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryStoreRequest;
use App\Http\Requests\HistoryUpdateRequest;

use Illuminate\Http\Request;

use App\History;
use App\Profile_kid;
use App\School;
use App\Location;
use App\Profile_parent;
use App\User;

class HistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }

 /* EVOLUCIONAR PACIENTES*/  

    public function evolucionarPaciente($id){

      $pacientes = Profile_kid::where('id','=',$id)->get();
                                
      $vac=compact("pacientes");
      return view('/admin/pacientes/evolucionar-paciente',$vac);
    }

    public function historiaClinica($id){
      $pacientes = Profile_kid::where('id','=',$id)->get();
      /*$histories = History::where('profile_kid_id','=',$id)
                            ->orderBy('date', 'ASC')
                            ->paginate(15); */
      $histories = History::join('users','histories.user_id','=','users.id')
                            ->where('profile_kid_id','=',$id)
                            ->orderBy('date', 'DESC')
                            ->paginate(15);                      

      $vac=compact("pacientes","histories");

      return view('/admin/pacientes/historia-clinica',$vac);
    }


    public function store(Request $req){


      $newHistory =[
        'user_id'        => $req->user_id,
        'profile_kid_id'  => $req->profile_kid_id,
        'tracking_number' => $req->tracking_number,
        'date'            => $req->date,
        'body'            => $req->body,
        'priority'        => $req->priority,
        'status'          => $req->status
      ];
      
      $history = History::create($newHistory);

      return back()->with('info','Se ha evolucionado correctamente el paciente');
    }
}
