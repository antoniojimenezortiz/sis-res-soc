<?php

namespace App\Http\Controllers;

use App\TipoUsuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_usuarios =TipoUsuario::where('estado','activo')->get();
        return view('usuario/tipo_usuario/index', compact('tipo_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_usuario = new TipoUsuario();
        
        $tipo_usuario->descripcion = $request->descripcion;
        $tipo_usuario->estado = "Activo";
        $tipo_usuario->save();

        return redirect('/tipo_usuario')->with('success', 'Registro guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tipo_usuario = TipoUsuario::find($request->id);
        $tipo_usuario->descripcion = $request->descripcion;
        $tipo_usuario->save();
        return redirect('/tipo_usuario')->with('success', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_usuario = TipoUsuario::find($id);
        $tipo_usuario->estado = 'inactivo';
        $tipo_usuario->save();
        return redirect('/tipo_usuario')->with('success', 'Registro eliminado exitosamente');

    }
}
