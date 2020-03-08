<?php

namespace App\Http\Controllers;
use App\casa;
use Illuminate\Http\Request;

class controllerCasas extends Controller
{
    public function index()
    {
        $casa = casa::all();

        return response()->json($casa,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        casa::create($request->all());

        return response()->json(['Mensaje' => 'Registrado con exito!']);
    }
    public function update($id,Request $request)
    {
        $casa = casa::findOrFail($id);
        $casa->nombre_casas = $request->nombre_casas;
        $casa->privadas= $request->privadas;
        $casa->numero_de_casa = $request->numero_de_casa;
        $casa->save();
    }
    public function destroy($id)
    {
        $casa = casa::find($id);
        $casa->delete();
    }
    public function show($id)
    {
        $casa = casa::find($id);
        return response()->json($casa, 200);
    }
}
