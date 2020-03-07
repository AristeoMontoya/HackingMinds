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

    }
    public function destroy()
    {

    }
    public function show()
    {
        
    }
}
