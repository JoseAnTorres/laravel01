<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Profesor;
use Exception;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignatura=Asignatura::orderBy('nombre')->paginate(5);
        return view('asignatura.index', compact('asignatura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesors=Profesor::array();
        return view('asignatura.create', compact('profesors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre"=>['required','string','min:3', 'max:12', 'unique:asignaturas,nombre'],
            "descripcion"=>['required','string','min:3', 'max:300'],
            "creditos"=>['required','integer','digits_between:1,250'],
            'profesor_id' => ['required']
        ]);
        try{
            Asignatura::create($request->all());
        }catch(Exception){
            return redirect()->route('asignatura.index');
        }
        return redirect()->route('asignatura.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        return view('asignatura.show', compact('asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {

        $profesors=Profesor::array();
        return view('asignatura.edit', compact('asignatura','profesors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        $request->validate([
            "nombre"=>['required','string','min:3', 'max:12', 'unique:asignaturas,nombre'.$asignatura->id],
            "descripcion"=>['required','string','min:3', 'max:300'],
            "creditos"=>['required','integer','digits_between:1,250'],
            'profesor_id' => ['required']
        ]);
        try{
            $asignatura->update($request->all());
        }catch(Exception){
            return redirect()->route('asignatura.index');
        }
        return redirect()->route('asignatura.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        try{
            $asignatura->delete();
        }catch(Exception){
            return redirect()->route('asignatura.index');
        }
        return redirect()->route('asignatura.index');
    }
}
