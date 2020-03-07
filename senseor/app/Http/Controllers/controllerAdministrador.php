<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\administrador;
class controllerAdministrador extends Controller
{
    //
    public function index()
    {
        $administrador = administrador::all();

        return response()->json($administrador,200);
    }

    public function store(Request $request)
    {
        //dd($request);
        administrador::create($request->all());

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
