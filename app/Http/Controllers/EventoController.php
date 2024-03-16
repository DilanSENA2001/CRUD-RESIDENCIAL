<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

use function Ramsey\Uuid\v1;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $eventos = Evento::all();
        return view('eventos.new', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Evento::create($request->all());
        return redirect('evento ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $evento = Evento::find($id);
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
        $datos = $request->all();
        $evento->update($datos);

        return redirect('evento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
