<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reporte;
class reporteController extends Controller
{
    public function index()
    {
        $reporte = reporte::all();

        return response()->json($reporte,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        reporte::create($request->all());

        return response()->json(['Mensaje' => 'Registrado con éxito!']);
    }
    public function update($id,Request $request)
    {
        $reporte = reporte::findOrFail($id);
        $reporte->contenido = $request->contenido;
        $reporte->tipo= $request->tipo;
        $reporte->usaurio_id = $request->usuario_id;
        $reporte->save();

    }
    public function destroy($id)
    {
        $reporte = reporte::find($id);
        $reporte->delete();
    }
    public function show($id)
    {
        $reporte = reporte::find($id);
        return response()->json($reporte, 200);
    }
}
