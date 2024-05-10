<?php

namespace App\Http\Controllers;

use App\Models\clase;
use App\Http\Requests\StoreclaseRequest;
use App\Http\Requests\UpdateclaseRequest;
use App\Models\profesor;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //= Clase::all();
        $clases = Clase::select(['clases.id','clases.nombre', 'clases.descripcion', 'profesors.id as profesor_id','profesors.nombre as nombre_profesor', 'profesors.apellido as apellido_profesor'])
        ->leftJoin('clase_profesors','clase_profesors.clase_id','=','clases.id')
        ->leftJoin('profesors', 'clase_profesors.profesor_id','=','profesors.id')
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
        return view('clases.edit',compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclaseRequest $request, clase $clase)
    {
        //
        $datos = $request->input();
        $clase->update($datos);
        session()->flash('status','El clase número '.$clase->id.' fue actualizado correctamente.');
        return redirect()->route('clases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clase $clase)
    {
        //
        $clase->delete();
        session()->flash('status','El clase número '.$clase->id.' fue eliminado correctamente.');
        //$clases = clase::all();
        return redirect()->route('clases.index');
    }
}
