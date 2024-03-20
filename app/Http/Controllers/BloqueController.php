<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;
use Validator;

class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bloques = Bloque::where('estado', 1)->get();
        return view('bloques.index', compact('bloques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bloques = Bloque::where('estado', 1)->get();
        return view('bloques.new', compact('bloques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:bloques|max:255',
            'body' => 'required',
            'publish_at' => 'nullable|date',
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        }

        Bloque::create($request->all());
        return redirect('bloque');

    }

    /**
     * Display the specified resource.
     */
    public function show(Bloque $request)
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
        // Bloque::destroy($id);

        Bloque::where('id', $id)->update(['estado' => 0]);

        return redirect('bloque')
        ->with('type','danger')
        ->with('message','Registro eliminado correctamente!');

    }
}
