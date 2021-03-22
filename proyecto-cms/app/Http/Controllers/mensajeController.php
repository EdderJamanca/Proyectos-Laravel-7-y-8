<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mensajeModel;

class mensajeController extends Controller
{

    public function index()
    {
        $mensaje=mensajeModel::all();
        return view('modulos.mensaje')->with('mensaje',$mensaje);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
        mensajeModel::where('id',$id)->update(['estado'=>'si']);
        return redirect('/mensaje');
    }

    public function destroy($id)
    {
        //
    }
}
