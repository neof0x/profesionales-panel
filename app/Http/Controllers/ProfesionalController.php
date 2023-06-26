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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
