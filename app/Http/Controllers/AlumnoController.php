<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Profesor;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$alumnos = Alumno::all();
        $alumnos = Alumno::paginate(12);
        return view('alumnos.index', ["alumnos"=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesores = Profesor::all();
        return view("alumnos.create", compact("profesores"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $datos = $request->input();
        $alumno = new Alumno($datos);
        $alumno->idProfesor = $request->idProfesor;

        session()->flash("status", "Se ha creado el alumno $alumno->nombre");
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $profesores = Profesor::all();
        return view("alumnos.edit", compact("alumno", "profesores"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $datos = $request->input();
        $alumno->idProfesor = $request->idProfesor;
        $alumno->update($datos);
        session()->flash("status", "Se ha actualizado el alumno $alumno->nombre");
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        session()->flash("status", "Se ha borrado el alumno $alumno->nombre");
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
