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

    }
    public function destroy()
    {

    }
    public function show()
    {
        
    }
}
