<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlideModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SlideController extends Controller
{
 
    public function index()
    {
        $slide=DB::SELECT('select* from slide');
        return view('modulos.slide')->with('slide',$slide);
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $rutaImg=$request['image']->store('slide','public');

        $datos=request()->validate([
            'titulo'=>['required','string','max:255'],
            'descripcion'=>['required','string','max:255'],
            'image'=>['required','image']
        ]);
        DB::table('slide')->insert(['titulo'=>$datos['titulo'],'descripcion'=>$datos['descripcion'],'img'=>$rutaImg]);
        
        return redirect('/slide');
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
        //
    }


    public function destroy($id)
    {
        $slide=SlideModel::find($id);

        if(Storage::delete('public/'.$slide->img)){
            SlideModel::destroy($id);
        }
        return redirect('/slide');
    }
}
