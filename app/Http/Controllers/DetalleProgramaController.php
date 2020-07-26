<?php

namespace App\Http\Controllers;

use App\Models\DetallePrograma;
use App\Models\Programa;

use Illuminate\Http\Request;

class DetalleProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $programa = Programa::find($request->id);
        $detalle_programa =DetallePrograma::join('Programas', "detalleprogramas.programa","=","programa.id")
                        ->get();
        return redirect('/programa')->with('success', 'Registro actualizado exitosamente',compact('detalle_programa'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetallePrograma  $detallePrograma
     * @return \Illuminate\Http\Response
     */
    public function show(DetallePrograma $detallePrograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetallePrograma  $detallePrograma
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePrograma $detallePrograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetallePrograma  $detallePrograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePrograma $detallePrograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetallePrograma  $detallePrograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallePrograma $detallePrograma)
    {
        //
    }
}
