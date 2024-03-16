<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use App\Models\Vivienda;


class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paquetes = Paquete::all();
        return view('paquetes.index',compact('paquetes'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $viviendas = Vivienda::all();
        return view('paquetes.new', compact('viviendas')); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Paquete::create($request->all());
        return redirect('paquete');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $paquete = Paquete::find($id);
        $viviendas = Vivienda::all();
        return view('paquetes.edit', compact('paquete', 'viviendas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paquete $paquete)
    {
        //
        // $datos = $request->all();
        // $paquete->update($datos);

        // return redirect('paquete');

        $datos = $request->all();
        $paquete->destinatario = $datos['destinatario'];
        $paquete->vivienda_id = $datos['vivienda_id'];
        $paquete->recibido_por = $datos['recibido_por'];
        $paquete->entregado_a = $datos['entregado_a'];

        $paquete->save();
        return redirect('paquete');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Paquete::destroy($id);

        return redirect('paquete')
        ->with('type', 'danger')
        ->with('message','Registro eliminado correctamente!');
    }
}
