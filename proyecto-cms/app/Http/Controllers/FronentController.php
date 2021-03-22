<?php

namespace App\Http\Controllers;

use App\FrontendModel;
use App\SlideModel;
use App\CategoriaModel;
use Illuminate\Http\Request;
use App\ExcursionesModel;
use App\mensajeModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class FronentController extends Controller
{

    public function index()
    {

        $slide=SlideModel::all();
        $categoria=CategoriaModel::all();
        $excursion=ExcursionesModel::all()->sortByDesc('id')->take(2);
        return view('frontend.inicio')->with('slide',$slide)->with('categorias',$categoria)->with('excursiones',$excursion);
    }
    
    public function Excursion()
    {
        $excursiones=ExcursionesModel::all();
        return view('frontend.excursionTotal')->with('todosExcursion',$excursiones);
    }
    public function ExcursionUna($id){

    }

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
        $datos=request()->validate(['nombre'=>['required','string'],
                                    'email'=>['required','email'],
                                    'mensaje'=>['required','string']]);

        mensajeModel::create(['nombre'=>$datos['nombre'],'email'=>$datos['email'],'mensaje'=>$datos['mensaje'],'estado'=>'no']);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FrontendModel  $frontendModel
     * @return \Illuminate\Http\Response
     */
    public function show(FrontendModel $frontendModel,$id)
    {
        $excursiones=ExcursionesModel::find($id);
        $galeria=DB::select('select * from galeria where id_excursion="'.$id.'" order by id desc');
    
        return view('frontend.unaExcursion')->with('unaExcursion',$excursiones)->with('galeria',$galeria);
    }


    public function edit(FrontendModel $frontendModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrontendModel  $frontendModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontendModel $frontendModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrontendModel  $frontendModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontendModel $frontendModel)
    {
        //
    }
}
