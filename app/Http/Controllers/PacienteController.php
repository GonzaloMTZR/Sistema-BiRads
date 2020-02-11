<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Estudio;
use App\Estado;
use App\Municipio;
use App\Jurisdiccion;
use App\FactorDeRiesgo;
use Illuminate\Http\Request;
use App\Http\Requests\StorePacientesRequest;
use Illuminate\Support\Facades\DB;

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
        //$pacientes = Paciente::orderBy('nombre', 'asc')->get();
        $pacientes = DB::table('pacientes')
        ->join('estados', 'pacientes.entidadFederativa', '=', 'estados.id')
        ->join('municipios', 'pacientes.municipio', '=', 'municipios.id')
        ->select('pacientes.*', 'estados.nombre_estado', 'municipios.nombre_municipio')->get();
        return view('modules.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        return view('modules.pacientes.create', compact('estados'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePacientesRequest $request)
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
        $paciente->entreCalles = $request->input('entreCalles');
        $paciente->manzana = $request->input('manzana');
        $paciente->lote = $request->input('lote');
        $paciente->referenciaDom = $request->input('referenciaDom');
        $paciente->colonia = $request->input('colonia');
        $paciente->codigoPostal = $request->input('codigoPostal');
        $paciente->entidadFederativa = $request->input('entidadFederativa');
        $paciente->jurisdiccion = $request->input('jurisdiccion');
        $paciente->municipio = $request->input('municipio');
        $paciente->localidad = $request->input('localidad');
        $paciente->telefono = $request->input('telefono');
        $paciente->tiempoResidencia = $request->input('tiempoResidencia');

        $paciente->calle_alter = $request->input('calle_alter');
        $paciente->entreCalles_alter = $request->input('entreCalles_alter');
        $paciente->manzana_alter = $request->input('manzana_alter');
        $paciente->lote_alter = $request->input('lote_alter');
        $paciente->referenciaDom_alter = $request->input('referenciaDom_alter');
        $paciente->colonia_alter = $request->input('colonia_alter');
        $paciente->entidad_alter = $request->input('entidad_alter');
        $paciente->jurisdiccion_alter = $request->input('jurisdiccion_alter');
        $paciente->municipio_alter = $request->input('municipio_alter');
        $paciente->localidad_alter = $request->input('localidad_alter');
        $paciente->telefono_alter = $request->input('telefono_alter');
        $paciente->correoElectronico = $request->input('correoElectronico');
        
        $paciente->afiliacion = $request->input('afiliacion');
        $paciente->otraAfiliacion= $request->input('otraAfiliacion');
        $paciente->numeroAfiliacion = $request->input('numeroAfiliacion');

        //dd($paciente);
        $paciente->save();
        return redirect('/pacientes')->with('success-message', 'Paciente guardado con éxito!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {   
        $paciente = DB::table('pacientes')
        ->join('estados', 'pacientes.entidadFederativa', '=', 'estados.id')
        ->join('jurisdicciones', 'pacientes.jurisdiccion', '=', 'jurisdicciones.id')
        ->join('municipios', 'pacientes.municipio', '=', 'municipios.id')
        ->join('localidades', 'pacientes.localidad', '=', 'localidades.id')
        ->select('pacientes.*', 'estados.nombre_estado', 'jurisdicciones.nombre_jurisdiccion',
        'municipios.nombre_municipio', 'localidades.nombre_localidad')
        ->where('pacientes.id', $paciente->id)->get()->first();

        $factor = DB::table('factor_de_riesgo_paciente')
        ->select('pacientes.id', 'factores_de_riesgos.*', 'factor_de_riesgo_paciente.*')
        ->join('pacientes', 'pacientes.id', '=', 'factor_de_riesgo_paciente.paciente_id')
        ->join('factores_de_riesgos', 'factores_de_riesgos.id', '=', 'factor_de_riesgo_paciente.factor_de_riesgo_id')
        ->where('factor_de_riesgo_paciente.paciente_id', $paciente->id)
        ->get()->first();

        $estudio = DB::table('estudio_paciente')
        ->select('pacientes.curp', 'pacientes.id','pacientes.nombre', 'pacientes.aMaterno', 'pacientes.aPaterno', 'estudios.*', 'estudio_paciente.*')
        ->join('pacientes', 'pacientes.id', '=', 'estudio_paciente.paciente_id')
        ->join('estudios', 'estudios.id', '=', 'estudio_paciente.estudio_id')
        ->where('estudio_paciente.paciente_id', $paciente->id)
        ->get()->first();

        $birads = DB::table('birads')
        ->select('pacientes.calle', 'pacientes.curp', 'pacientes.id','pacientes.nombre', 'pacientes.aMaterno', 'pacientes.aPaterno', 'birads.*')
        ->join('pacientes', 'pacientes.id', '=', 'birads.paciente_id')
        ->where('birads.paciente_id', $paciente->id)
        ->get()->toArray();
        
        dd($birads);
        //dd($estudio);
        //dd($paciente);
        //dd($factor);

        return view('modules.pacientes.show', compact('paciente', 'factor', 'estudio', 'birads'));
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
    public function destroy($id)
    {
        $pacientes = Paciente::findOrFail($id);
        $pacientes->estudios()->detach();
        $pacientes->delete();
        return redirect('/pacientes')->with('success-message', 'El paciente fue eliminado con éxito!');
    }

    public function addEstudio(Request $request, Paciente $paciente){
        $estudio = new Estudio();
        $estudio->tipoEstudio = $request->input('tipoEstudio');
        $estudio->otroEstudio = $request->input('otroEstudio');
        $estudio->fechaDeToma = $request->input('fechaDeToma');

        $estudio->save();

        $paciente->estudios()->attach($estudio->id);
        return redirect()->back()->with('success-message', 'El estudio se agregó con éxito al paciente!');
    }

    public function addFactorRiesgo(Request $request, Paciente $paciente){
        $factor = new FactorDeRiesgo();
        $factor->menarca = $request->input('menarca');
        $factor->familiaresAnt = $request->input('familiares');
        $factor->otroFamiliar = $request->input('otroFamiliar');
        $factor->menopausia = $request->input('menopausia');
        $factor->edadMenopausia = $request->input('edadMenopausia');
        $factor->otrosFactores = $request->input('otrosFactores');

        $factor->save();
        $paciente->factoresDeRiesgo()->attach($factor->id);
        return redirect()->back()->with('success-message', 'El factor de riesgo se agregó con éxito al paciente!');
    }
}
