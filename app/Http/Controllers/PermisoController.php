<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;
use App\Models\Vivienda;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $permisos = Permiso::where('estado', 1)->get();
        return view('permisos.index',compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $viviendas = Vivienda::where('estado', 1)->get();
        return view('permisos.new',compact('viviendas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Permiso::create($request->all());
        return redirect('permiso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $viviendas = Vivienda::where('estado', 1)->get();
        $permiso = Permiso::find($id);
        return view('permisos.edit', compact('permiso', 'viviendas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permiso $permiso)
    {
        //
        $datos = $request->;
        $permiso->update($datos);

        return redirect('permiso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Permiso::destroy($id);

        return redirect('permiso')
        ->with('type', 'danger')
        ->with('message','Registro eliminado correctamente!');
    }
}
    