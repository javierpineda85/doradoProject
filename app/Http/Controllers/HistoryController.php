<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryStoreRequest;
use App\Http\Requests\HistoryUpdateRequest;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      } 
}
