<?php

namespace App\Http\Controllers;

use App\InicioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Cache\Store;
class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=InicioModel::all();
        return view('modulos.inicio')->with('datos',$datos);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(InicioModel $inicioModel)
    {
        //
    }

   
    public function edit(InicioModel $inicioModel)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $datos=request()->validate(['nombre'=>['required','string'],
                                    'telefono'=>['required','string'],
                                    'imagen'=>['required','image'],
                                    'email'=>['required','email'],
                                    'direccion'=>['required','string']]);
     
        if(request('imagen')){
            Storage::delete('public/'.request('imagen-antigua'));
            $rutaimg=$request['imagen']->store('/','public');
        }
     
  
        InicioModel::where('id',$id)->update(['logo'=>$rutaimg,'telefono'=>$datos['telefono'],
                             'direccion'=>$datos['direccion'], 'email'=>$datos['email'], 'nombre'=>$datos['nombre']]);
        $datos=InicioModel::all();
        return view('modulos.inicio')->with('datos',$datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InicioModel  $inicioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(InicioModel $inicioModel)
    {
        //
    }
}
