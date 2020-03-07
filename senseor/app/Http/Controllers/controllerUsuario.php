<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
class controllerUsuario extends Controller
{
    //
    public function index()
    {
        $usuario = usuario::all();

        return response()->json($usuario,200);
    }

    public function store(Request $request)
    {
        
        //dd($request);
        usuario::create($request->all());
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
