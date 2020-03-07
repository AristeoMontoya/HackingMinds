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
