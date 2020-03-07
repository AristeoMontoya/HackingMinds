<?php

namespace App\Http\Controllers;
use App\casa;
use Illuminate\Http\Request;

class controllerCasas extends Controller
{
    public function index()
    {
        $casa = casa::all();

        return response()->json($casa,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        casa::create($request->all());

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
