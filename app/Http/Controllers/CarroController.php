<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros=Carro::all();
        return view('carros.index', compact('carros'));

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
        $carros=new Carro;
        $carros->marca=$request->input('marca');
        $carros->modelo=$request->input('modelo');
        $carros->color=$request->input('color');
        $carros->matricula=$request->input('matricula');
        $carros->año=$request->input('año');
        $carros->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $carros=Carro::find($id);
        return view('carros.modal-info',compact('carros'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carros=Carro::find($id);
        $carros->marca=$request->input('marca');
        $carros->modelo=$request->input('modelo');
        $carros->color=$request->input('color');
        $carros->matricula=$request->input('matricula');
        $carros->año=$request->input('año');
        $carros->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carros=Carro::find($id);
        $carros->delete();
        return redirect()->back();
        //
    }
}
