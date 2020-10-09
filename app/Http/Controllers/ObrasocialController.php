<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObrasocialController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      } 
}
