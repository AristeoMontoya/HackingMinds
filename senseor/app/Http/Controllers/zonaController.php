<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zona;
class zonaController extends Controller
{
    public function index()
    {
        $zona = zona::all();

        return response()->json($zona,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        zona::create($request->all());

        return response()->json(['Mensaje' => 'Registrado con exito!']);
    }
    public function update($id,Request $request)
    {
        $zona = zona::findOrFail($id);
        $zona->nombre_zonas = $request->nombre_zonas;
        $zona->privadas= $request->privadas;
        $zona->limite_de_invitados = $request->limite_de_invitados;
        $zona->save();
        return response()->json(['Mensaje'=>'Actualizado con exito!']);

    }
    public function destroy(zona $zona)
    {
        $zona->delete();
        return response()->json(['Mensaje'=>'Eliminado con exito!']);

    }
    public function show($id)
    {
        $zona = zona::find($id);
        return response()->json($zona,200);
    }
}
