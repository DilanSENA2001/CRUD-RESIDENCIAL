<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use App\Models\Residente;
use App\Models\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viviendas = Vivienda::all();   
        return view('viviendas.index',compact('viviendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bloques = Bloque::where('estado', 1)->get();
        return view('viviendas.new',compact('bloques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
                //
                $validator = Validator::make($request->all(), [
                    'nomenclatura' => 'required|unique:viviendas|max:255',
                    'body' => 'required',
                    'publish_at' => 'nullable|date',
                ]);
         
                if ($validator->fails()) {
                    return back()->withErrors($validator)
                                 ->withInput();
                }
        

        Vivienda::create($request->all());
        return redirect('vivienda');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vivienda $vivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $vivienda = Vivienda::find($id);
        $bloques = Bloque::all();
        return view('viviendas.edit', compact('vivienda', 'bloques'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vivienda $vivienda)
{
    // Validación de datos
    $validatedData = $request->validate([
        // Aquí van las reglas de validación para los campos de vivienda
    ]);

    // Actualización de los datos de la vivienda
    $vivienda->update($validatedData);

    return redirect()->route('vivienda.index')->with('success', 'Vivienda actualizada exitosamente');

}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Bloque::destroy($id);

        Vivienda::where('id', $id)->update(['estado' => 0]);

        return redirect('vivienda')
        ->with('type','danger')
        ->with('message','Registro eliminado correctamente!');

    }
}
