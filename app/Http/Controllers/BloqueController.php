<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;

class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bloques = Bloque::all();
        return view('bloques.index', compact('bloques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bloques = Bloque::all();
        return view('bloques.new', compact('bloques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Bloque::create($request->all());
        return redirect('bloque');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bloque $bloque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $bloque = Bloque::find($id);
        return view('bloques.edit', compact('bloque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bloque $bloque)
    {
        //
        $datos = $request->all();
        $bloque->update($datos);

        return redirect('bloque');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Bloque::destroy($id);

        return redirect('bloque')
        ->with('type','danger')
        ->with('message','Registro eliminado correctamente!');

    }
}
