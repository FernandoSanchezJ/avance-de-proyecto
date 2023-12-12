<?php

namespace App\Http\Controllers;

use App\Models\TipoPNR;
use Illuminate\Http\Request;

class TipoPNRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipopnrs=TipoPNR::all();
        return view('tipopnr.index', compact('tipopnrs'));
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
        $tipopnrs=new TipoPNR;
        $tipopnrs->tipo=$request->input('tipo');
        $tipopnrs->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoPNR $tipoPNR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tipopnrs=TipoPNR::find($id);
        $tipopnrs->tipo=$request->input('tipo');
        $tipopnrs->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipopnrs=TipoPNR::find($id);
        $tipopnrs->delete();
        return redirect()->back();
        //
    }
}
