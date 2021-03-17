<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EmpleadoModel;


class Empleado extends Controller
{
  
    public function index()
    {
        $empleados = DB::select('select * from empleado');
        return view('inicio')->with('empleados',$empleados);
    }

 
    public function create()
    {
        return view('crear-empleado');
    }


    public function store(Request $request)
    {
        $datos= request()->validate([
            'nombre'=>['required','string','max:20'],
            'apellido'=>['required','string','max:20'],
            'telefono'=>['required','string','max:15'],
            'salario'=>['required','string','max:7'],
        ]);
        DB::table('empleado')->insert(['nombre'=>$datos['nombre'],'apellido'=>$datos['apellido'],
                                      'telefono'=>$datos['telefono'],'salario'=>$datos['salario']]);
        return redirect('/');
    }

  
    public function show($id)
    {
        $empleado =EmpleadoModel::find($id);
        return view('empleado')->with('empleado',$empleado);
    }

    public function edit($id)
    {
        $empleado =EmpleadoModel::find($id);
        return view('editar-empleado')->with('empleado',$empleado);
    }


    public function update(Request $request, $id)
    {
        $datos= request()->validate([
            'nombre'=>['required','string','max:20'],
            'apellido'=>['required','string','max:20'],
            'telefono'=>['required','string','max:15'],
            'salario'=>['required','string','max:7'],
        ]);
        DB::table('empleado')->where('id',$id)->update(['nombre'=>$datos['nombre'],'apellido'=>$datos['apellido'],
        'telefono'=>$datos['telefono'],'salario'=>$datos['salario']]);
        return redirect('/');
    }


    public function destroy($id)
    {
        DB::table('empleado')->where('id',$id)->delete();

        return redirect('/');
    }
}
