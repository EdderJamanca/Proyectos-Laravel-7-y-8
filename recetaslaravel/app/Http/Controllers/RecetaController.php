<?php

namespace App\Http\Controllers;

use App\Models\CategoriaReceta;
use App\Models\Perfil;
use App\Models\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class RecetaController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth',['except'=>['show','search']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $perfil=Perfil::where('user_id',auth()->user()->id)->get();
        $usuario=auth()->user();
        $recetas = Receta::where('user_id',$usuario->id)->paginate(3);
    
        return view('receta.index')->with('recetas',$recetas)
        ->with('perfil',$perfil)
        ->with('usuario',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::table('categoria_receta')->get()->pluck('nombre','id')->dd();
        // $categorias=DB::table('categoria_recetas')->get()->pluck('nombre','id');
        
        $categorias=CategoriaReceta::all(['id','nombre']);
        return view('receta.create')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $data=request()->validate([
            'titulo'=>'required|min:6',
            'categoria'=>'required',
            'preparacion'=>'required',
            'ingredientes'=>'required',
            'imagen'=>'required|image',
        ]);
        $ruta_imagen=$request['imagen']->store('upload-recetas','public');
        // Resize de la imagen
        $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,550);
        $img->save();
        // DB::table('recetas')->insert([
        //     'titulo'=>$data['titulo'],
        //     'preparacion'=>$data['preparacion'],
        //     'ingredientes'=>$data['ingredientes'],
        //     'imagen'=> $ruta_imagen,
        //     'user_id'=>Auth::user()->id,
        //     'categoria_id'=>$data['categoria']
        // ]);
        // almacenar en la BD (con modelo)
        auth()->user()->recetas()->create([
            'titulo'=>$data['titulo'],
            'preparacion'=>$data['preparacion'],
            'ingredientes'=>$data['ingredientes'],
            'imagen'=> $ruta_imagen,
            'categoria_id'=>$data['categoria']
        ]);

        return redirect()->action('App\Http\Controllers\RecetaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        // algun metodo para obtener una receta
        // $receta=Receta::findOrFail($receta);
        $like=(auth()->user()) ? auth()->user()->MeGusta->contains($receta->id): false ;
        // pasa la cantidad de like a la vista
        // $likes=$receta->like()->where('receta_id',$receta->id)->get()->count();
        $likes=$receta->like->count();
            
        return view('receta.show',compact('receta','like','likes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        
        $this->authorize('view',$receta);

        $categorias=CategoriaReceta::all(['id','nombre']);
        return view('receta.edit',compact('categorias','receta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        // revisar el policy
        $this->authorize('update',$receta);
        // validar
        $data=request()->validate([
            'titulo'=>'required|min:6',
            'categoria'=>'required',
            'preparacion'=>'required',
            'ingredientes'=>'required',
        ]);
        // asignar los valores
        $receta->titulo=$data['titulo'];
        $receta->categoria_id=$data['categoria'];
        $receta->preparacion=$data['preparacion'];
        $receta->ingredientes=$data['ingredientes'];
        // si el usuario sube una nueva imagen
        if(request('imagen')){

            $ruta_imagen=$request['imagen']->store('upload-recetas','public');
            // Resize de la imagen
            $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,550);

        }

        $receta->save();

        return redirect()->action('App\Http\Controllers\RecetaController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        // revisar el policy
        $this->authorize('delete',$receta);

        // eliminar la receta
        $receta->delete();

        return redirect()->action('App\Http\Controllers\RecetaController@index');
    }

    public function search(Request $request){

        $busqueda=$request['buscar'];
        $recetas=Receta::where('titulo','like','%'.$busqueda.'%')->paginate(10);
        $recetas->appends(['buscar'=>$busqueda]);
        return view('busquedas.show',compact('recetas','busqueda'));

    }
}
