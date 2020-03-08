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
        $usuario = usuario::findOrFail($id);
        $usuario->nombre_usuarios = $request->nombre_zonas;
        $usaurio->casa= $request->casa;
        $usuario->telefono = $request->telefono;
        $usuario->rol_id = $request->rol_id;
        $usuario->save();
        return response()->json(['mensaje'=>'Actualizado con exito!']);
    }
    public function destroy(usuario $usuario)
    {
        $usuario->delete();
        return response()->json(['Mensaje'=>'Elimiando con exito!']);
      
    }
    public function show($id)
    {
        $usuario = usuario::find($id);
        return response()->json($usuario,200);
        
    }
}
