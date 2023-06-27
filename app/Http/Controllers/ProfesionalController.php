<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;
use Illuminate\Support\Facades\DB;
//php artisan make:controller profesionalController --resource

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto')); //estamos obteniendo los valores del input texto
        $profesionales = DB::table('profesional')
        ->select('id','name','apellido','dni','email','profesion','programas','fecha','archivos')
        ->where('apellido','LIKE','%'.$texto.'%')
        ->orWhere('name','LIKE','%'.$texto.'%')
        ->orderBy('apellido','asc')
        ->paginate(10); //le indicamos que vamos a obtener los datos de nuestra tabla de la bd, luego usamos el select para sleeccionar las tablas que deseamos obtener. Where es el filtro de busqueda a usar
        return view('Profesionales.index',compact('profesionales','texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Profesionales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //aqui recibo los datos del formulario
    {
        $profesional = new Profesional;
        $profesional->name=$request->input('name');
        $profesional->apellido=$request->input('apellido');
        $profesional->dni=$request->input('dni');
        $profesional->email=$request->input('email');
        $profesional->profesion=$request->input('profesion');
        $profesional->programas=$request->input('programas');
        $profesional->fecha=$request->input('fecha');
        $profesional->archivos=$request->input('archivos');
        $profesional->save();   
        return redirect()->route('Profesionales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profesional= Profesional::FindOrFail($id);
        return view('profesionales.edit',compact('profesional')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profesional = Profesional::findOrFail($id);
        $profesional->name= $request->input('name');
        $profesional->apellido=$request->input('apellido');
        $profesional->dni=$request->input('dni');
        $profesional->email=$request->input('email');
        $profesional->profesion=$request->input('profesion');
        $profesional->programas=$request->input('programas');
        $profesional->fecha=$request->input('fecha');
        $profesional->archivos=$request->input('archivos');
        $profesional->save();
        return redirect()->route('Profesionales.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profesional=Profesional::FindOrFail($id);
        $profesional->delete();
        return redirect()->route('Profesionales.index');
    }
}
