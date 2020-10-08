<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedade;

class NovedadeController extends Controller
{
    public function crearNovedad(){
        return view('admin/noticias/crear-novedad');
    }
    
    public function store(Request $req){
        $newNovedad = Novedade::create($req->all());

        return back()->with('info','Novedad creada con éxito!');
    }

    public function deleteNovedad($id){
        Novedade::delete($id);
        return view('admin/noticias/crear-novedad')->with('info','Novedad eliminada permanentemente!');
    }

    public function listadoNovedades(Request $req ){ 
 
           $novedades = Novedade::orderBy('created_at','desc')
                                ->paginate(15);
           
            $vac=compact("novedades");
            
            return view('/admin/noticias/listado-de-novedades',$vac);
    }
    public function VerNovedad($id){
 
        $novedades = Novedade::where('id','=',$id)->get();
        
         $vac=compact("novedades");
         
         return view('admin/noticias/modificar-novedad',$vac);
    }



}