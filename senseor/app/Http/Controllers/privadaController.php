<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privada;
class privadaController extends Controller
{
    public function index()
    {
        $privada = Privada::all();

        return response()->json($privada,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        Privada::create($request->all());

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
