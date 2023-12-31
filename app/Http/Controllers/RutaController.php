<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas=Ruta::all();
        return view('ruta.index', compact('rutas'));
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
        $rutas=new Comparativa;
        $rutas->ruta=$request->input('ruta');
        $rutas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruta $ruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruta $ruta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rutas=Ruta::find($id);
        $rutas->ruta=$request->input('ruta');
        $rutas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rutas=Ruta::find($id);
        $rutas->delete();
        return redirect()->back();
        //
    }
}
