<?php

namespace App\Http\Controllers;

use App\UnidadMedica;
use App\Localidad;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnidadMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$unidadesMedicas = DB::select('select UM.id, UM.nombre_unidadMedica, L.nombre_localidad 
        from unidades_medicas as UM inner join localidades as L on UM.localidad_id = L.id');*/

        $unidadesMedicas = DB::table('unidades_medicas')
        ->join('localidades', 'unidades_medicas.localidad_id', '=', 'localidades.id')
        ->select('unidades_medicas.*', 'localidades.nombre_localidad')
        ->get();
        return view('modules.unidades_medicas.index', compact('unidadesMedicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidad::all();
        return view('modules.unidades_medicas.create', compact('localidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidadMedica = new UnidadMedica();
        $unidadMedica->nombre_unidadMedica = $request->input('nombre_unidadMedica');
        $localidad = $request->input('nombre_localidad');
        $unidadMedica->localidades()->associate($localidad);

        $unidadMedica->save();
        return redirect('/unidades-medicas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnidadMedica  $unidadMedica
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadMedica $unidadMedica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadMedica  $unidadMedica
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadMedica $unidadMedica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadMedica  $unidadMedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadMedica $unidadMedica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadMedica  $unidadMedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadMedica $unidadMedica)
    {
        //
    }
}
