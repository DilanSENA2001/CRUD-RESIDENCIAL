<?php

namespace App\Http\Controllers;

use App\Models\Zona_comun;
use Illuminate\Http\Request;

class ZonaComunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $zonas_comunes = Zona_comun::where('estado', 1)->get();
        return view('zonas_comunes.index', compact('zonas_comunes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $zonas_comunes = Zona_comun::where('estado', 1)->get();
        return view('zonas_comunes.new ', compact('zonas_comunes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Zona_comun::create($request->all());
        return redirect('zona_comun');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zona_comun $zona_comun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $zona_comun = Zona_comun::find($id);
        return view('zonas_comunes.edit', compact('zona_comun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zona_comun $zona_comun)
    {
        //
        $datos = $request->all();
        $zona_comun->update($datos);

        return redirect('zona_comun');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Zona_comun::destroy($id);
        Zona_comun::where('id', $id)->update(['estado' => 0]);

        return redirect('zona_comun')
        ->with('type','danger')
        ->with('message','Registro eliminado correctamente!');
    }
}
