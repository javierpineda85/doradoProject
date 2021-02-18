<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Novedade;

class PageController extends Controller
{
    public function inicio(){
        $novedades = Novedade::orderBy('created_at','desc')
                                ->paginate(3);

        $vac=compact("novedades");
        return view('web.inicio',$vac);
    }

    public function nosotros(){
        return view('web.nosotros');
    }
    public function contacto(){
        return view('web.contacto');
    }

    public function novedades(){
        $novedades = Novedade::orderBy('created_at','desc')
                        ->paginate(4);

        $vac=compact("novedades");
        return view('web.novedades',$vac);
    }

    public function areaFamilia(){
        return view('web.familia');
    }

    public function inclusion(){
        return view('web.inclusion-social');
    }

    public function talleres(){
        return view('web.talleres-inclusivos');
    }

    public function investigacion(){
        return view('web.investigacion');
    }

    public function prestaciones(){
        return view('web.prestaciones');
    }
}
