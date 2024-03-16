<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use App\Models\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class ResidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $residentes = Residente::all();
        return view('residentes.index', compact('residentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $viviendas = Vivienda::all();
        return view('residentes.new', compact('viviendas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        /**$result = Validator::make($request->all(), [
            'nombre' => 'required|max:50',
            'movil' => 'required|min:20',
            'vivienda_id' => 'exist:viviendas',
        ]);
 
        if ($result->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($result)
         */




        Residente::create($request->all());
        return redirect('residente ');
    }



    /**
     * Display the specified resource.
     */
    public function show(Residente $residente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $viviendas = Vivienda::all();
        $residente = Residente::find($id);
        return view(('residentes.edit'), compact('residente', 'viviendas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Residente $residente)
    {
        //
        $datos = $request->all();
        $residente->nombre = $datos['nombre'];
        $residente->movil = $datos['movil'];
        $residente->vivienda_id = $datos['vivienda_id'];
        $residente->nombre_propietario = $datos['nombre_propietario'];
        $residente->movil_propietario = $datos['movil_propietario'];
        $residente->email_propietario = $datos['email_propietario'];
        $residente->save();
        return redirect('residente');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Residente $residentes)
    {
        //
    }
}
