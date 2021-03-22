<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaModel;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias=CategoriaModel::all();

        return view('modulos.categorias')->with('categorias',$categorias);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $datos=request()->validate([ 'categoria'=>['required','string'] ]);

        CategoriaModel::create(['nombre'=>$datos['categoria']]);

        return redirect('categorias');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $datos=request()->validate([ 'tituloActualizar'=>['required','string'] ]);
        
        // DB::table('categorias')->where('id',$id)->update(['nombre'=>$datos['tituloActualizar']]);
        CategoriaModel::where('id',$id)->update(['nombre'=>$datos['tituloActualizar']]);

        return redirect('categorias');
    }

 
    public function destroy($id)
    {
        CategoriaModel::destroy($id);
        return redirect('categorias');
    }
}
