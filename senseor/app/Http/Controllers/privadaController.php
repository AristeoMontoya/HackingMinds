<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\privada;
class privadaController extends Controller
{
    public function index()
    {
        $privada = privada::all();

        return response()->json($privada,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        privada::create($request->all());

        return response()->json(['Mensaje' => 'Registrado con exito!']);
    }
    public function update($id,Request $request)
    {  
        $privada = privada::findOrFail($id);

        $privada->nombre_privada = $request->nombre_privada;
        $privada->dirección = $request->dirección;
        $privada->telefono = $request->telefono;
        $privada->save();
        return response()->json(['mensaje'=>'Actualiado con exito!']);
    }
    public function destroy($id)
    {
        $privada = privada::find($id);
        $privada->delete();

    }
    public function show($id)
    {
        $privada = privada::find($id);
        return response()->json($privada,200);
    }
}
