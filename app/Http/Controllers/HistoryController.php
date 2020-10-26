<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryStoreRequest;
use App\Http\Requests\HistoryUpdateRequest;

use Illuminate\Http\Request;

use App\History;

class HistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
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
