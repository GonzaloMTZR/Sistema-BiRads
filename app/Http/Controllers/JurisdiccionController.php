<?php

namespace App\Http\Controllers;

use App\Jurisdiccion;
use Illuminate\Http\Request;

class JurisdiccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurisdicciones = Jurisdiccion::orderBy('jurisdiccion', 'asc')->get();
        return view('modules.jurisdicciones.index', compact('jurisdicciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('modules.jurisdicciones.create');
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

    /**
    * Funcion para el select dinamico para el registro de pacientes
    * y el registro de doctorees
    * 
    */
    public function getJurisdiccion(){      
        $jurisdiccion = Input::get('jurisdiccion');
        $jurisdicciones = DB::table('jurisdicciones')
        ->select('jurisdiccion')
        ->groupBy('jurisdiccion')->where('id', '=', $jurisdiccion)->get();
        return response()->json($jurisdicciones);
        
    }
}
