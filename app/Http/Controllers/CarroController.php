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
        $carro=Carro::all();
        return view('carros.index', compact('carro'));

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
        $carro=new Carro;
        $carro->marca=$request->input('marca');
        $carro->modelo=$request->input('modelo');
        $carro->color=$request->input('color');
        $carro->matricula=$request->input('matricula');
        $carro->año=$request->input('año');
        $carro->save();
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
        $carro=Carro::find($id);
        return view('carros.modal-info',compact('carro'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carro=Carro::find($id);
        $carro->marca=$request->input('marca');
        $carro->modelo=$request->input('modelo');
        $carro->color=$request->input('color');
        $carro->matricula=$request->input('matricula');
        $carro->año=$request->input('año');
        $carro->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carro=Carro::find($id);
        $carro->delete();
        return redirect()->back();
        //
    }
}
