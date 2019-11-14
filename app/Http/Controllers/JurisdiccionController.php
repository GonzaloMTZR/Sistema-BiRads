<?php

namespace App\Http\Controllers;

use App\Jurisdiccion;
use App\Estado;
use App\Localidad;
use App\UnidadMedica;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJurisdiccionRequest;


class JurisdiccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurisdicciones = Jurisdiccion::orderBy('nombre_jurisdiccion', 'asc')->get();
        $estados = Estado::orderBy('nombre_estado', 'asc')->get();
        $localidades = Localidad::orderBy('nombre_localidad', 'asc')->get();
        $unidadesMedicas = UnidadMedica::orderBy('nombre_unidadMedica', 'asc')->get();
        return view('modules.jurisdicciones.index', compact('jurisdicciones', 'estados', 'localidades', 'unidadesMedicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $estados = Estado::all();
        return view ('modules.jurisdicciones.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJurisdiccionRequest $request)
    {
        $jurisdiccion = new Jurisdiccion();
        $localidad = new Localidad();
        $unidadMedica = new UnidadMedica();

        $estado = $request->input('nombre_estado');
        /**
         * Guarda la relacion del estado con la jurisdiccion
         */
        $jurisdiccion->nombre_jurisdiccion = $request->input('nombre_jurisdiccion');
        $jurisdiccion->estados()->associate($estado);
        $jurisdiccion->save();

        /**
         * Guarda la relacion de la jurisdiccion con el municipio/localidad
         */
        $localidad->nombre_localidad = $request->input('municipio');
        $localidad->codigo_localidad = $request->input('codigo_localidad');
        $localidad->jurisdicciones()->associate($jurisdiccion->id);
        $localidad->save();

        /**
         * Guarda la relación entre el municipio y la unidad medica
         */
        $unidadMedica->nombre_unidadMedica = $request->input('unidad_medica');
        $unidadMedica->localidades()->associate($localidad);
        $unidadMedica->save();

        return redirect('/jurisdicciones')->with('success-message', 'La jurisdicción se guardó con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurisdiccion  $jurisdiccion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurisdiccion = Jurisdiccion::findOrFail($id);
        return view('modules.jurisdicciones.show', compact('jurisdiccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurisdiccion  $jurisdiccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurisdiccion $jurisdiccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurisdiccion  $jurisdiccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurisdiccion $jurisdiccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurisdiccion  $jurisdiccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurisdiccion $jurisdiccion)
    {
        //
    }
}
