<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExcursionesModel;
use App\CategoriaModel;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;


class ExcursionesController extends Controller
{

    public function index()
    {
        $categoria=CategoriaModel::all();
        $Excursiones=ExcursionesModel::all();
        return view('modulos.excursiones')->with('categorias',$categoria)->with('extenciones',$Excursiones);
    }

 
    public function create()
    {

    }


    public function store(Request $request)
    {
        $rutaimag=$request['imagenExcursion']->store('excursiones','public');
        $datos=request()->validate([ 'nombreExcursion'=>['required','string','max:30'],
        'descripcionExcursion'=>['required','string'],
        'idcategoria'=>['required','numeric'],
        'imagenExcursion'=>['required','image']]);


        ExcursionesModel::create(['titulo'=>$datos['nombreExcursion'], 
                'img'=>$rutaimag,
                'id_Categoria'=>$datos['idcategoria'],
                'descripcion'=>$datos['descripcionExcursion']]);
        return redirect('excursiones');
    }

    public function show($id)
    {
        $excursion01=ExcursionesModel::find($id);
        $categoria=CategoriaModel::all();
        $Excursiones=ExcursionesModel::all();

        if((array)$excursion01 !=0){

            return view('modulos.excursiones',array('status'=>200))->with('excursion01',$excursion01)->with('categorias',$categoria)->with('extenciones',$Excursiones);
        }else{
           
            return view('modulos.excursiones',array('status'=>404))->with('categorias',$categoria)->with('extenciones',$Excursiones);
        }
      
    }


    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
        $datos=request()->validate(['nombreExEditar'=>['required','string','max:30'],
        'descripcionExcEditar'=>['required','string'],
        'ediCategoria'=>['required','numeric']]);
        $rutaImg='';

        if(request('imagenExEditar')){

            Storage::delete('public/'.request('imagen-antigua'));
            $rutaImg=$request['imagenExEditar']->store('excursiones','public');
            
        }else{
            $rutaImg=request('imagen-antigua');
        }
        ExcursionesModel::where('id',$id)->update(['titulo'=>$datos['nombreExEditar'], 'img'=>$rutaImg, 'id_Categoria'=>$datos['ediCategoria'],
         'descripcion'=>$datos['descripcionExcEditar']]);
        return redirect('excursiones');
    }

    public function destroy($id)
    {
        ExcursionesModel::destroy($id);
        return redirect('excursiones');
    }
}
