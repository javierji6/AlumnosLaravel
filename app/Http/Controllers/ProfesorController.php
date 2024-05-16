<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$profesores = Profesor::all();
        $profesores = Profesor::paginate(12);
        return view('profesores.index', ["profesores"=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profesores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $datos = $request->input();
        $profesor = new Profesor($datos);
        session()->flash("status", "Se ha creado el profesor $profesor->nombre");
        $profesor->save();
        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        return view("profesores.edit", compact("profesor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        $datos = $request->input();
        $profesor->update($datos);
        session()->flash("status", "Se ha actualizado el profesor $profesor->nombre");
        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        session()->flash("status", "Se ha borrado el profesor $profesor->nombre");
        $profesor->delete();
        return redirect()->route('profesores.index');
    }
}
