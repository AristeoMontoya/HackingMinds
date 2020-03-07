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
        $administrador = administrador::findOrFail($id);
        $administrador->privada = $request->privada;
        $administrador->nombre= $request->nombre;
        $administrador->limite_de_invitados = $request->limite_de_invitados;
        $administrador->save();
    }
    public function destroy(administrador $admisnistrador)
    { 
     $administrador->delete();
     return redirect()->route('administrador.index');

    }
    public function show()
    {
        
    }
}
