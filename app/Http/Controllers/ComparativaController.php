<?php

namespace App\Http\Controllers;

use App\Models\Comparativa;
use Illuminate\Http\Request;

class ComparativaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comparativas=Comparativa::all();
        return view('comparativa.index', compact('comparativas'));
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
        $comparativas=new Comparativa;
        $comparativas->idCodigo=$request->input('idCodigo');
        $comparativas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comparativa $comparativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comparativa $comparativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $comparativas=Comparativa::find($id);
        $comparativas->idCodigo=$request->input('idCodigo');
        $comparativas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comparativas=Comparativa::find($id);
        $comparativas->delete();
        return redirect()->back();
        //
    }
}
