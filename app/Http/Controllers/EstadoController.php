<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Jurisdiccion;
use App\Municipio;
use App\Localidad;
use App\UnidadMedica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }

    /**
    * Funcion para el select dinamico para el registro de pacientes
    * y el registro de doctores
    * trea las jurisdicciones
    */
    public function getJurisdicciones(){
        $estados_id = Input::get('estado_id');
        $jurisdicciones = Jurisdiccion::where('estado_id', '=',  $estados_id)->get();
        return response()->json($jurisdicciones);
    }

    /**
    * Funcion para el select dinamico para el registro de pacientes
    * y el registro de doctores
    * trae los municipios
    */
    public function getMunicipios(){
        $jurisdiccion_id = Input::get('jurisdiccion_id');
        $municipios = Municipio::where('jurisdiccion_id', '=',  $jurisdiccion_id)->get();
        return response()->json($municipios);
    }

    /**
    * Funcion para el select dinamico para el registro de pacientes
    * y el registro de doctores
    * trae las localidaes
    */
    public function getLocalidades(){
        $municipio_id = Input::get('municipio_id');
        $localidades = Localidad::where('municipio_id', '=',  $municipio_id)->get();
        return response()->json($localidades);
    }

    /**
    * Funcion para el select dinamico para el registro de pacientes
    * y el registro de doctores
    * trae las unidades medicas
    */
    public function getUnidadesMedicas(){
        $localidad_id = Input::get('localidad_id');
        $unidadesMedicas = UnidadMedica::where('localidad_id', '=',  $localidad_id)->get();
        return response()->json($unidadesMedicas);
    }
}
