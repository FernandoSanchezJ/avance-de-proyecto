<?php

namespace App\Http\Controllers;

use App\Models\Llegada;
use Illuminate\Http\Request;

class LlegadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llegadas=Llegada::all();
        return view('llegada.index', compact('llegadas'));
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
        $llegadas=new Llegada;
        $llegadas->dia=$request->input('dia');
        $llegadas->mes=$request->input('mes');
        $llegadas->año=$request->input('año');
        $llegadas->hora=$request->input('hora');
        $llegadas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(llegada $llegada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(llegada $llegada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $llegadas=Llegada::find($id);
        $llegadas->dia=$request->input('dia');
        $llegadas->mes=$request->input('mes');
        $llegadas->año=$request->input('año');
        $llegadas->hora=$request->input('hora');
        $llegadas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $llegadas=Llegada::find($id);
        $llegadas->delete();
        return redirect()->back();
        //
    }
}
