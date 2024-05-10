<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use App\Http\Requests\StoreEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;

class EstudianteController extends Controller
{
    public function index()
    {
        //
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEstudianteRequest $request)
    {
        //
        $datosEstudiante = $request->input();
        $estudiante = new estudiante($datosEstudiante);
        session()->flash('status','El estudiante número '.$estudiante->nombre.' fue creado correctamente.');
        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(estudiante $estudiante)
    {
        //
        // $editable = ;
       return view('estudiantes.edit',compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstudianteRequest $request, estudiante $estudiante)
    {
        //
        $datos = $request->input();
        $estudiante->update($datos);
        session()->flash('status','El estudiante número '.$estudiante->id.' fue actualizado correctamente.');
        return redirect()->route('estudiantes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(estudiante $estudiante)
    {
        //
        $estudiante->delete();
        session()->flash('status','El estudiante número '.$estudiante->id.' fue eliminado correctamente.');
        //$estudiantes = Estudiante::all();
        return redirect()->route('estudiantes.index');

    }
}
