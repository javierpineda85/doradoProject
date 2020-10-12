<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileParentStoreRequest;
use App\Http\Requests\ProfileParentUpdateRequest;

use Illuminate\Http\Request;

class ProfileParentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      } 
}
