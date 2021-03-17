<?php

namespace App\Http\Controllers;

use App\InicioModel;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InicioModel  $inicioModel
     * @return \Illuminate\Http\Response
     */
    public function show(InicioModel $inicioModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InicioModel  $inicioModel
     * @return \Illuminate\Http\Response
     */
    public function edit(InicioModel $inicioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InicioModel  $inicioModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InicioModel $inicioModel)
    {
        //
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
