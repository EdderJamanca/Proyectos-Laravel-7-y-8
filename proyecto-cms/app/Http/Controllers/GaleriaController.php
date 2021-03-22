<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExcursionesModel;
use App\GaleriaModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Cache\Store;

class GaleriaController extends Controller
{

    public function index()
    {
        
    }


    public function create($id)
    {
        $excursion =ExcursionesModel::find($id);
        $galeria=GaleriaModel::all()->where('id_excursion',$id);
        return view('modulos.galeria')->with('excursion',$excursion)->with('galeria',$galeria);
    }

    
    public function store(Request $request)
    {

        $rutaImg=$request['imagen_galeria']->store('galeria','public');
        $datos=request()->validate(['id_categoria'=>['required','numeric'],
                                    'imagen_galeria'=>['required','image']]);

        GaleriaModel::create(['img'=>$rutaImg,'id_excursion'=>$datos['id_categoria']]);

        return redirect('excursiones');
        
    }


    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=GaleriaModel::find($id);

        if(Storage::delete('public/'.$image->img)){
            GaleriaModel::destroy($id);
        }
        
        return redirect('galeria/'.$image->id_excursion);
    }
}
