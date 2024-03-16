<?php

namespace App\Http\Controllers;

use App\Models\Tipo_vivienda;
use Illuminate\Http\Request;

class TipoViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tipos_viviendas = Tipo_vivienda::all();
        return view('tipos_viviendas.index', compact('tipos_viviendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tipos_viviendas = Tipo_vivienda::all();
        return view('tipos_viviendas.new', compact('tipos_viviendas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Tipo_vivienda::create($request->all());
        return redirect('tipo_vivienda');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_vivienda $tipo_vivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tipo_vivienda = Tipo_vivienda::find($id);
        return view('tipos_viviendas.edit', compact('tipo_vivienda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_vivienda $tipo_vivienda)
    {
        //
        $datos = $request->all();
        $tipo_vivienda->update($datos);

        return redirect('tipo_vivienda');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        Tipo_vivienda::destroy($id);

        return redirect('tipo_vivienda')
            ->with('type', 'danger')
            ->with('message', 'Registro eliminado correctamente!');
    }
}
