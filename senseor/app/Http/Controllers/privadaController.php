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
