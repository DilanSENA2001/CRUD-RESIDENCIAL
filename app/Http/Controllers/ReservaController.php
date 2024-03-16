<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Residente;
use Illuminate\Http\Request;
use App\Models\Zona_comun;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $zonas_comunes = Zona_comun::all();
        $residentes = Residente::all();
        return view('reservas.new', compact('zonas_comunes', 'residentes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Reserva::create($request->all());
        return redirect('reserva');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $zonas_comunes = Zona_comun::all();

        $reserva = Reserva::find($id);
        return view('reservas.edit', compact('reserva', 'zonas_comunes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
        $datos = $request->all();
        $reserva->zona_comun_id = $datos['zona_comun'];
        $reserva->hora_reserva = $datos['hora_reserva'];
        $reserva->fecha_reserva = $datos['fecha_reserva'];

        $reserva->save();
        return redirect('reserva');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Reserva::destroy($id);

        return redirect('reserva')
            ->with('type', 'danger')
            ->with('message', 'Registro eliminado correctamente!');
    }
}
