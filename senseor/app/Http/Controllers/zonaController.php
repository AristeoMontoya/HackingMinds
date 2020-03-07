<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zona;
class zonaController extends Controller
{
    public function index()
    {
        $zona = Zona::all();

        return response()->json($zona,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        Zona::create($request->all());

        return response()->json(['Mensaje' => 'Registrado con éxito!']);
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
