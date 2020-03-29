<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Estudio;
use App\Estado;
use App\Municipio;
use App\Jurisdiccion;
use App\FactorDeRiesgo;
use App\Birad;
use App\DatoClinico;
use App\Consulta;
use App\User;
use Auth;
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
        $user = User::findOrFail(Auth::user()->id);
        $paciente->user_id = $user->id;
        $paciente->save();
        //$paciente->user()->associate($user->id);
        //dd($paciente);
        
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

        $factores = DB::table('factor_de_riesgo_paciente')
        ->select('pacientes.id', 'factores_de_riesgos.*')
        ->join('pacientes', 'pacientes.id', '=', 'factor_de_riesgo_paciente.paciente_id')
        ->join('factores_de_riesgos', 'factores_de_riesgos.id', '=', 'factor_de_riesgo_paciente.factor_de_riesgo_id')
        ->where('factor_de_riesgo_paciente.paciente_id', $paciente->id)
        ->get();

        $estudios = DB::table('estudio_paciente')
        ->select('pacientes.curp', 'pacientes.id','pacientes.nombre', 'pacientes.aMaterno', 'pacientes.aPaterno', 'estudios.*', 'estudio_paciente.*')
        ->join('pacientes', 'pacientes.id', '=', 'estudio_paciente.paciente_id')
        ->join('estudios', 'estudios.id', '=', 'estudio_paciente.estudio_id')
        ->where('estudio_paciente.paciente_id', $paciente->id)
        ->get();

        $birads = DB::table('birads')
        ->select('pacientes.calle', 'pacientes.curp', 'pacientes.id','pacientes.nombre', 'pacientes.aMaterno', 'pacientes.aPaterno', 'birads.*')
        ->join('pacientes', 'pacientes.id', '=', 'birads.paciente_id')
        ->where('birads.paciente_id', $paciente->id)
        ->get();

        $datosClinicos = DB::table('datos_clinicos')
        ->select('datos_clinicos.*', 'pacientes.id')
        ->join('pacientes', 'pacientes.id', '=', 'datos_clinicos.paciente_id')
        ->where('datos_clinicos.paciente_id', $paciente->id)
        ->get();

        $consultas = DB::table('consultas')
        ->select('consultas.*', 'pacientes.curp','pacientes.nombre', 'pacientes.aMaterno', 'pacientes.aPaterno')
        ->join('pacientes', 'pacientes.id', '=', 'consultas.paciente_id')
        ->where('consultas.paciente_id', $paciente->id)
        ->get();

        //dd($datosClinicos);
        //dd($birads);
        //dd($estudio);
        //dd($paciente);
        //dd($factor);

        return view('modules.pacientes.show', compact('paciente', 'factores', 'estudios', 'birads', 'datosClinicos', 'consultas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $estados = Estado::all();
        $estadosNombres = DB::table('pacientes')
        ->join('estados', 'pacientes.entidadFederativa', '=', 'estados.id')
        ->join('jurisdicciones', 'pacientes.jurisdiccion', '=', 'jurisdicciones.id')
        ->join('municipios', 'pacientes.municipio', '=', 'municipios.id')
        ->join('localidades', 'pacientes.localidad', '=', 'localidades.id')
        ->select('pacientes.*', 'estados.*', 'jurisdicciones.*',
        'municipios.*', 'localidades.*')
        ->where('pacientes.id', $paciente->id)->get()->first();
        return view('modules.pacientes.edit', compact('paciente', 'estados','estadosNombres'));
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

        if($paciente->user_id != null){
            $paciente->user_id = $paciente->user_id;
        }else{
            $user = User::findOrFail(Auth::user()->id);
            $paciente->user_id = $user->id;
        }   
        $paciente->save();

        
        return redirect('/pacientes')->with('success-message', 'Paciente guardado con éxito!');
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

    public function addBirad(Request $request, Paciente $paciente){
        $birad = new Birad();

        $birad->BIRADS = $request->input('birads');
        $birad->resultado = $request->input('resultado');
        $birad->fecha_de_toma = $request->input('fecha_de_toma');
          
        $birad->pacientes()->associate($paciente);

        $birad->save();    

        return redirect()->back()->with('success-message', 'Birad agregado con éxito al paciente!');
    }

    public function addDatoClinico(Request $request, Paciente $paciente){
        $datoClinico = new DatoClinico();

        $datoClinico->menstruacion = $request->input('menstruacion');
        $datoClinico->fecha_menstruacion = $request->input('fecha_menstruacion');
        $datoClinico->signos_clinicos = $request->input('signos_clinicos');
        $datoClinico->especificacion_signo = $request->input('especificacion_signo');
        $datoClinico->localizacion = $request->input('localizacion');
        $datoClinico->fecha_localizacion = $request->input('fecha_localizacion');
        $datoClinico->pacientes()->associate($paciente);

        $datoClinico->save();    

        return redirect()->back()->with('success-message', 'Dato clinico agregado con éxito al paciente!');
    }

    public function addConsulta(Request $request, Paciente $paciente){
        $consulta = new Consulta();

        $consulta->exploracion_clinica = $request->input('exploracion_clinica');
        $consulta->estudio = $request->input('estudio');
        $consulta->otro_estudio = $request->input('otro_estudio');
        $consulta->caso_probable = $request->input('caso_probable');
        $consulta->seguimiento_caso = $request->input('seguimiento_caso');
        $consulta->seguimiento_semestral = $request->input('seguimiento_semestral');
        $consulta->cedula_defuncion = $request->input('cedula_defuncion');
        $consulta->fecha_consulta = $request->input('fecha_consulta');

        $consulta->pacientes()->associate($paciente);

        $consulta->save();
        return redirect()->back()->with('success-message', 'Consulta agregada con éxito al paciente!');

    }
}
