<?php

namespace App\Http\Controllers;

use App\Models\Repartidor;
use App\Models\Carro;
use Illuminate\Http\Request;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repartidores=Repartidor::all();
        $carros=Carro::all();
        return view('repartidor.index', compact('repartidores', 'carros'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $repartidores= new Repartidor;
        $repartidores->nombre=$request->input('nombre');
        $repartidores->apellidos=$request->input('apellidos');
        $repartidores->edad=$request->input('edad');
        $repartidores->cumpleaños=$request->input('cumpleaños');
        $repartidores->curp=$request->input('curp');
        $repartidores->genero=$request->input('genero');
        $repartidores->telefono=$request->input('telefono');
        $repartidores->email=$request->input('email');
        $repartidores->licencia=$request->input('licencia');
        $repartidores->idCarro=$request->input('idCarro');
        $repartidores->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Repartidor $repartidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repartidor $repartidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $repartidores=Repartidor::find($id);
        $repartidores->nombre=$request->input('nombre');
        $repartidores->apellidos=$request->input('apellidos');
        $repartidores->edad=$request->input('edad');
        $repartidores->cumpleaños=$request->input('cumpleaños');
        $repartidores->curp=$request->input('curp');
        $repartidores->genero=$request->input('genero');
        $repartidores->telefono=$request->input('telefono');
        $repartidores->email=$request->input('email');
        $repartidores->licencia=$request->input('licencia');
        $repartidores->idCarro=$request->input('idCarro');
        $repartidores->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repartidor $repartidor)
    {
        $repartidores=Reapartidor::find($id);
        $repartidores->delete();
        return redirect()->back();
        //
    }
}
