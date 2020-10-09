<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('web.inicio');
    }

    public function nosotros(){
        return view('web.nosotros');
    }
    public function contacto(){
        return view('web.contacto');
    }

    public function novedades(){
        return view('web.novedades');
    }
}
