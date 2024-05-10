<?php

namespace App\Http\Controllers;

use App\Models\profesor;
use App\Http\Requests\StoreprofesorRequest;
use App\Http\Requests\UpdateprofesorRequest;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprofesorRequest $request)
    {
        //
        $datosProfesor = $request->input();
        $profesor = new profesor($datosProfesor);
        session()->flash('status','Clase creada correctamente.');
        $profesor->save();
        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profesor $profesore)
    {
        //
        return view('profesores.edit',compact('profesore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprofesorRequest $request, profesor $profesore)
    {
        //
        $datos = $request->input();
        $profesore->update($datos);
        session()->flash('status','El profesor número '.$profesore->id.' fue actualizado correctamente.');
        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profesor $profesore)
    {
        //
        $profesore->delete();
        session()->flash('status','El profesor número '.$profesore->id.' fue eliminado correctamente.');
        //$profesors = profesor::all();
        return redirect()->route('profesores.index');
    }
}
