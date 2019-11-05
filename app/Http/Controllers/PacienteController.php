<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Estudio;
use Illuminate\Http\Request;
use Alert;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::orderBy('nombre', 'asc')->get();
        return view('modules.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.pacientes.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $paciente = new Paciente();

        $paciente->nombre = $request->input('nombre');
        $paciente->aPaterno = $request->input('aPaterno');
        $paciente->aMaterno = $request->input('aMaterno');
        $paciente->entidad = $request->input('entidad');
        $paciente->curp = $request->input('curp');
        $paciente->fechaNacimiento = $request->input('fechaNacimiento');
        $paciente->edad = $request->input('edad');
        $paciente->calle = $request->input('calle');
        $paciente->colonia = $request->input('colonia');
        $paciente->municipio = $request->input('municipio');
        $paciente->codigoPostal = $request->input('codigoPostal');
        $paciente->entidadFederativa = $request->input('entidadFederativa');
        $paciente->jurisdiccion = $request->input('jurisdiccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->calle_alter = $request->input('calle_alter');
        $paciente->colonia_alter = $request->input('colonia_alter');
        $paciente->municipio_alter = $request->input('municipio_alter');
        $paciente->telefono_alter = $request->input('telefono_alter');
        $paciente->correoElectronico = $request->input('correoElectronico');
        $paciente->tiempoResidencia = $request->input('tiempoResidencia');
        $paciente->afiliacion = $request->input('afiliacion');
        $paciente->numeroAfiliacion = $request->input('numeroAfiliacion');

        //dd($paciente);
        $paciente->save();
        return redirect('/pacientes');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('modules.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('modules.pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }

    public function addEstudio(Request $request, Paciente $paciente){
        $estudio = new Estudio();
        $estudio->institucion = $request->input('institucion');
        $estudio->entidad = $request->input('entidad');
        $estudio->jurisdiccion = $request->input('jurisdiccion');
        $estudio->municipio = $request->input('municipio');
        $estudio->localidad = $request->input('localidad');
        $estudio->unidadMedica = $request->input('unidadMedica');
        $estudio->clues = $request->input('clues');
        $estudio->fechaDeToma = $request->input('fechaDeToma');
        $estudio->birads = $request->input('birads');
        $estudio->resultados = $request->input('resultados');
        //$estudio->archivo = $request->input('');
        
        $estudio->save();

        $paciente->estudios()->attach($estudio->id);
        return redirect()->back();//->with('success-message', 'Pago de abono realizado con éxito!');
    }
}
