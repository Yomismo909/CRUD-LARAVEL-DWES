<?php

namespace App\Http\Controllers;

use App\Models\clase;
use App\Http\Requests\StoreclaseRequest;
use App\Http\Requests\UpdateclaseRequest;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //= Clase::all();
        $clases = Clase::select(['clases.id','clases.nombre', 'clases.descripcion', 'profesors.nombre as nombre_profesor', 'profesors.apellido as apellido_profesor'])
        ->join('clase_profesors','clase_profesors.clase_id','=','clases.id')
        ->join('profesors', 'profesors.id','=','clase_profesors.profesor_id')
        ->get();
        return view('clases.index', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclaseRequest $request)
    {
        //
        $datosClase = $request->input();
        $clase = new clase($datosClase);
        session()->flash('status','Clase creada correctamente.');
        $clase->save();
        return redirect()->route('clases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(clase $clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clase $clase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclaseRequest $request, clase $clase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clase $clase)
    {
        //
    }
}
