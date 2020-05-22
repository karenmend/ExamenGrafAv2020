<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelos
use App\Reporte;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = Reporte::all();
        $argumentos = array();
        $argumentos['reportes'] = $reportes;

        return view('reportes.index',$argumentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoReporte = new Reporte();
        $nuevoReporte->numero_paciente = $request->input("paciente"); 
        $nuevoReporte->nombre = $request->input("nombre"); 
        $nuevoReporte->apellidos = $request->input("apellidos"); 
        $nuevoReporte->nacimiento = $request->input("nacimiento"); 
        $nuevoReporte->fecha = $request->input("fecha"); 
        $nuevoReporte->hora = $request->input("hora"); 
        $nuevoReporte->estado = $request->input("estado"); 
        $nuevoReporte->presion = $request->input("presion"); 
        $nuevoReporte->pulso = $request->input("pulso"); 
        $nuevoReporte->temperatura = $request->input("temperatura"); 
        $nuevoReporte->liquido = $request->input("liquido");
        $nuevoReporte->rodilla = $request->input("rodilla");
        $nuevoReporte->observaciones = $request->input("observaciones"); 
        $nuevoReporte->save();
        return redirect()->route('reportes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte = Reporte::find($id);
        $argumentos = array();
        $argumentos['reporte'] = $reporte;
        return view('reportes.show',$argumentos);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
