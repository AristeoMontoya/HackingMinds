<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evento;
class controllerEvento extends Controller
{
    //
    public function index()
    {
        $evento = evento::all();

        return response()->json($evento,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        evento::create($request->all());

        return response()->json(['Mensaje' => 'Registrado con exito!']);
    }
    public function update($id,Request $request)
    {
        $evento= zona::findOrFail($id);
        $evento->nombre_evento = $request->nombre_evento;
        $evento->zona= $request->zona;
        $evento->numero_invitados = $request->numero_invitados;
        $evento->fecha_evento = $request->fecha_evento;
        $evento->save();
        return response()->json(['Mensaje'=>'']);
    }
    public function destroy($id)
    {
    $evento = evento::find($id);
    $evento->delete();
    }
    public function show($id)
    {
        $evento = evento::find($id);
        return response()->json($evento, 200);
    }
}
