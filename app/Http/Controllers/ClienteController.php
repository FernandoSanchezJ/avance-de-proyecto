<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('cliente.index', compact('clientes'));

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
        $clientes=new Cliente;
        $clientes->nombre=$request->input('nombre');
        $clientes->apellidos=$request->input('apellidos');
        $clientes->telefono=$request->input('telefono');
        $clientes->cp=$request->input('cp');
        $clientes->municipio=$request->input('municipio');
        $clientes->calle=$request->input('calle');
        $clientes->numI=$request->input('numI');
        $clientes->numE=$request->input('numE');
        $clientes->referencia=$request->input('referencia');
        $clientes->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clientes=Cliente::find($id);
        $clientes->nombre=$request->input('nombre');
        $clientes->apellidos=$request->input('apellidos');
        $clientes->telefono=$request->input('telefono');
        $clientes->cp=$request->input('cp');
        $clientes->municipio=$request->input('municipio');
        $clientes->calle=$request->input('calle');
        $clientes->numI=$request->input('numI');
        $clientes->numE=$request->input('numE');
        $clientes->referencia=$request->input('referencia');
        $clientes->update();
        return redirect()->back();   
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $id)
    {
        $clientes=PNR::find($id);
        $clientes->delete();
        return redirect()->back();
        //
    }
}
