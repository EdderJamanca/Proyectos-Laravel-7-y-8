<?php

namespace App\Http\Controllers;

use App\Models\CategoriaReceta;
use App\Models\Receta;
use Illuminate\Http\Request;

class InicioReceta extends Controller
{
    //
    public function index(){
        // mostrar las recetas por cantidad de voto
        // $voto=Receta::has('likes','>',0)->get();
        $votados=Receta::withCount('like')->orderBy('like_count','desc')->limit(3)->get();
        
        // obtener las recetas mas ultimas
        // $nueva=Receta::oldest()->get();
        // obtener las recetas mas nuevas

        // $nueva=Receta->lastest()->take(5)->get();
        $nuevas=Receta::orderby('created_at','DESC')->LIMIT(5)->get();
        // take es similar a limit 

        // obtener todas las categorias
        $categorias=CategoriaReceta::all();

        // agrupar las recetas por categoria
        $recetas=[];
        foreach($categorias as $categoria){
            if(Receta::where('categoria_id',$categoria->id)->count() >0){
                $recetas[$categoria->nombre][]=Receta::where('categoria_id',$categoria->id)->get();
            }
        }
        

        return view('inicio.index',compact('nuevas','recetas','votados'));
    }
}
