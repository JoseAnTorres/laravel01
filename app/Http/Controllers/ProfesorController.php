<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Profesor;
use Exception;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesor = Profesor::orderBy('nombre')->paginate(10);
        return view('profesor.index', compact('profesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.create');
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
            "nombre" => ['required', 'string', 'min:3', 'max:30'],
            "apellidos" => ['required', 'string', 'min:3', 'max:50'],
            "email" => ['required', 'string', 'unique:profesors,email'],
            "localidad" => ['required', 'string', 'min:3', 'max:30']
        ]);
        try {
            Profesor::create($request->all());
        } catch (Exception) {
            return redirect()->route('profesor.index');
        }
        return redirect()->route('profesor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        return view('profesor.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        return view('profesor.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            "nombre" => ['required', 'string', 'min:3', 'max:30'],
            "apellidos" => ['required', 'string', 'min:3', 'max:50'],
            "email" => ['required', 'string', 'unique:profesors,email'.$profesor->id],
            "localidad" => ['required', 'string', 'min:3', 'max:50']
        ]);
        try{
            $profesor->update($request->all());
        }catch(Exception){
            return redirect()->route('profesor.index');
        }
        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        try{
            $profesor->delete();
        }catch(Exception){
            return redirect()->route('profesor.index');
        }
        return redirect()->route('profesor.index');
    }
}
