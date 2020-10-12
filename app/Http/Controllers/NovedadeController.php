<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NovedadeStoreRequest;
use App\Http\Requests\NovedadeUpdateRequest;
use App\Novedade;
use App\Profile_profe;
use App\User;

class NovedadeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      } 
    
    
      public function crearNovedad(){
        return view('admin/noticias/crear-novedad');
    }
    
    public function store(NovedadeStoreRequest $req){
        
        $newNovedad = Novedade::create($req->all());

        if($req->file('file')){
            $path = Storage::disk('public')
                            ->put('image',$req->file('file'));
            $newNovedad->fill(['file'=>asset($path)])->save();
        }

        return back()->with('info','Novedad creada con éxito!');
    }

    public function deleteNovedad($id){
        Novedade::find($id)->delete();
        return view('admin/noticias/crear-novedad')->with('info','Novedad eliminada permanentemente!');
    }

    public function update(NovedadeUpdateRequest $req, $id){
        $novedad = Novedade::find($id);
        
        $novedad->fill($req->all())->save();

        if($req->file('file')){
            $path = Storage::disk('public')
                            ->put('image',$req->file('file'));
            $novedad->fill(['file'=>asset($path)])->save();
        }

        return back()->with('info','La novedad ha sido creada!');
    }
    
    public function listadoNovedades(Request $req ){ 
 
           $novedades = Novedade::orderBy('created_at','desc')
                                ->paginate(15);
           
            $vac=compact("novedades");
            
            return view('/admin/noticias/listado-de-novedades',$vac);
    }

    public function listarPorTituloNovedades(Request $req ){ //lista todos los pacientes por apellido
  
        $titulo = $req ->get('title');
  
        $novedades =  Novedade::orderBy('title','asc')
                  ->title($titulo)
                  ->paginate(10);
        $vac=compact("novedades");
        return view('/admin/noticias/listado-de-novedades',$vac);
      }


    public function VerNovedad($id){
 
        $novedades = Novedade::where('id','=',$id)->get();
        $idProf = Novedade::where('id','=',$id)->pluck('user_id');
        
        $profesional= User::where('id','=',$idProf)
                                    ->get();
        
        $vac=compact("novedades","profesional");
         
         return view('admin/noticias/modificar-novedad',$vac);
    }



}