<?php

namespace App\Http\Controllers;

use App\Models\PNR;
use Illuminate\Http\Request;

class PNRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pnrs=PNR::all();
        return view('pnr.index', compact('pnrs'));

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
        $pnrs=new PNR;
        $pnrs->descripcion=$request->input('descripcion');
        $pnrs->idT=$request->input('tipoPNR');
        $pnrs->idReptaridor=$request->input('repartidor');
        $pnrs->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PNR $pNR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PNR $pNR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PNR $pNR)
    {
        $pnrs=PNR::find($id);
        $pnrs->descripcion=$request->input('descripcion');
        $pnrs->idT=$request->input('tipoPNR');
        $pnrs->idReptaridor=$request->input('repartidor');
        $pnrs->save();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pnrs=PNR::find($id);
        $pnrs->delete();
        return redirect()->back();
        //
    }
}
