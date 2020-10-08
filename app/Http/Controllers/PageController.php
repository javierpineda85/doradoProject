<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('inicio');
    }
    public function nosotros(){
        return view('nosotros');
    }
    public function contacto(){
        return view('contacto');
    }

    public function novedades(){
        return view('novedades');
    }

}
