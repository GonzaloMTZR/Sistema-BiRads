@extends('layouts.master')
@section('title', 'Vista detallada del paciente')

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
        <h1>Pacientes</h1>
        <ul>
            <li><a href="/pacientes">Pacientes</a></li>
            <li>Vista en detalle del paciente {{$paciente->nombre}} {{$paciente->aPaterno}} {{$paciente->aMaterno}}</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Paciente</h4>
            <p>Si desea agregar un estudio al paciente de click en el boton "Agregar un estudio".</p>
        </div>
    </div>

    @if(session()->has('success-message'))
        <div class="alert alert-success background-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('success-message') }}
        </div>
    @endif


    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-header" style="background-color:pink">
                    <h4>Datos del paciente</h4>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nombre del paciente</th>
                                        <td>{{$paciente->nombre}} {{$paciente->aPaterno}} {{$paciente->aMaterno}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Entidad de nacimiento</th>
                                        <td>{{$paciente->entidadFederativa}}</td>
                                    </tr>
                                
                                    <tr>
                                        <th scope="row">Curp</th>
                                        <td>{{$paciente->curp}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fecha de nacimiento</th>
                                        <td>{{\Carbon\Carbon::parse($paciente->fechaNacimiento)->format('d/m/Y')}}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row">Edad</th>
                                        <td>{{$paciente->edad}}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row">Calle y número</th>
                                        <td>{{$paciente->calle}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Colonia</th>
                                        <td>{{$paciente->colonia}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Muncipio donde vive</th>
                                            <td>{{$paciente->nombre_municipio}}</td>                          
                                    </tr>
                                    <tr>
                                        <th scope="row">Entidad Federativa</th>
                                        <td>{{ $paciente->nombre_estado }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jurisdicción</th>
                                        <td>{{ $paciente->nombre_jurisdiccion }}</td>
                                    </tr>
                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end of table col-lg-6 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">Telefono</th>
                                <td>{{$paciente->telefono}}</a></td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Direccion alternativa</th>
                                @if ($paciente->calle_alter != 0)
                                    <td>{{$paciente->calle_alter}}</td>
                                @else
                                    <td>- - - -</td>
                                @endif
                            </tr>
                            
                            <tr>
                                <th scope="row">Colonia alternativa</th>
                                @if ($paciente->colonia_alter != 0)
                                    <td>Colonia: {{$paciente->colonia_alter}}</td>
                                @else
                                    <td>- - - -</td>
                                @endif
                                
                            </tr>
                            
                            <tr>
                                <th scope="row">Municipio alterno</th>
                                @if ($paciente->municipio_alter != 0)
                                    <td>{{$paciente->municipio_alter}}</td>
                                @else
                                    <td>- - - -</td>
                                @endif
                            </tr>
                            
                            <tr>
                                <th scope="row">Otro telefono</th>
                                @if ($paciente->telefono_alter )
                                    <td>{{$paciente->telefono_alter}}</td>
                                @else
                                    <td>- - - -</td>
                                @endif
                                
                            </tr>
                            
                            <tr>
                                <th scope="row">Correo Electrónico</th>
                                <td>{{$paciente->correoElectronico}}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Tiempo de residencia actual</th>
                                <td>{{$paciente->tiempoResidencia}}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Afiliación</th>
                                <td>{{$paciente->afiliacion}}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Numero de afilición o póliza</th>
                                <td>{{$paciente->numeroAfiliacion}}</td>
                            </tr>
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                <!-- end of table col-lg-6 -->
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <!-- right control icon -->
            <h3 class="card-title">Expediente del paciente</h3>    
            <div class="accordion" id="accordionRightIcon">
                <div class="card ">

                    <!--
                    * Datos clinicos
                    -->
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                            <a data-toggle="collapse" class="text-default collapsed" href="#accordion-item-icon-right-1"
                                aria-expanded="false">Datos Clínicos</a>
                        </h6>
                    </div>
    
    
                    <div id="accordion-item-icon-right-1" class="collapse" data-parent="#accordionRightIcon" style="">
                        <div class="card-body">
                            <div class="float-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#datosClinicos" >Agregar dato clínico</button> 
                                @include('modules/pacientes/modal/modalDatosClinicos')
                            </div>
                            
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="datosClinicos" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>Menstruación</th>
                                                <th>Fecha de menstruación</th>
                                                <th>Signos clínicos</th>
                                                <th>Localización</th>
                                                <th>Fecha de localización del signo clínico</th>
                                            </tr>
                                        </thead>
                    
                                        <tbody>
                                            @foreach ($datosClinicos as $datoClinico)    
                                                <tr style="text-align:center;">                                        
                                                    <td>{{$datoClinico->menstruacion}}</td>
                                                    <td>{{\Carbon\Carbon::parse($datoClinico->fecha_menstruacion)->format('d/m/Y')}}</td>                                          
                                                    @if($datoClinico->signos_clinicos != 'Otro')
                                                        <td>{{$datoClinico->signos_clinicos}}</td>
                                                        
                                                    @else
                                                        <td>{{$datoClinico->especificacion_signo}}</td>
                                                    @endif
                                                    <td>{{$datoClinico->localizacion}}</td>
                                                    <td>{{\Carbon\Carbon::parse($datoClinico->fecha_localizacion)->format('d/m/Y')}}</td>
                                                </tr>
                                            @endforeach  
                                        </tbody>
                                    </table>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!--
                * Factores de Riesgo
                -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                            <a data-toggle="collapse" class="text-default collapsed"
                                href="#accordion-item-icon-right-2">Factores de Riesgo</a>
                        </h6>
                    </div>
    
    
    
                    <div id="accordion-item-icon-right-2" class="collapse " data-parent="#accordionRightIcon">
                        <div class="card-body">
            
                            <div class="float-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#factorDeRiesgo" >Agregar factor de riesgo</button> 
                                @include('modules/pacientes/modal/modalFactoresRiesgo')
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="factores" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>Edad de presencia de la menarca (Años)</th>
                                                <th>En que familiares tiene antecedentes de cáncer de mama</th>
                                                <th>Presentó menopausia</th>
                                                <th>Edad de la presentación de la menopausia (Años)</th>
                                                <th>Otros factores de riesgo</th>
                                                <th>Fecha del factor de riesgo</th>
                                            </tr>
                                        </thead>
                
                                        <tbody>
                                            @foreach ($factores as $factor)
                                                <tr style="text-align:center;">
                                                    <td>{{$factor->menarca}}</td>   
                                                    @if($factor->otroFamiliar == null)
                                                        <td>{{$factor->familiaresAnt}}</td>
                                                    @else
                                                        <td>{{$factor->otroFamiliar}}</td>
                                                    @endif    
                                                    
                                                    <td>{{$factor->menopausia}}</td>
                
                                                    @if($factor->edadMenopausia == null)
                                                        <td>- - - -</td>
                                                    @else
                                                        <td>{{$factor->edadMenopausia}}</td>
                                                    @endif 
                                                    
                                                    <td>{{$factor->otrosFactores}}</td>    
                                                    <td>{{\Carbon\Carbon::parse($factor->created_at)->format('d/m/Y')}}</td> 
                                                </tr> 
                                            @endforeach     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!--
                * Historial de estudios
                -->
                <div class="card ">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                            <a data-toggle="collapse" class="text-default collapsed"
                                href="#accordion-item-icon-right-3">Historial de Estudios</a>
                        </h6>
    
                    </div>
    
    
    
                    <div id="accordion-item-icon-right-3" class="collapse " data-parent="#accordionRightIcon">
                        <div class="card-body"> 
                            <div class="float-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#estudio" >Agregar un estudio</button> 
                                @include('modules/pacientes/modal/modalEstudio')
                            </div>

                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="resultados" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th >Identificador (CURP)</th>
                                                <th >Tipo De Estudio</th>
                                                <th >Nombre de la paciente</th>
                                                <th >Fecha de la toma</th>
                                                <th >Ver detalles del estudio</th>
                                            </tr>
                                        </thead>
                
                                        <tbody>
                                            @foreach ($estudios as $estudio)
                                                <tr style="text-align:center;">
                                                    <td>{{$paciente->curp}}</td>
                
                                                    @if($estudio->otroEstudio == null)
                                                        <td>{{$estudio->tipoEstudio}}</td>
                                                    @else
                                                        <td>Otro estudio: {{$estudio->otroEstudio}}</td>
                                                    @endif
                                                    
                                                    <td>{{$paciente->nombre}} {{$paciente->aPaterno}} {{$paciente->aMaterno}}</td>
                                                    <td>{{Carbon\Carbon::parse($estudio->fechaDeToma)->format('d/m/Y')}}</td></td>
                                                    <td >
                                                        <a href="/pacientes/{{$paciente->id}}" class="text-success mr-2">
                                                            <i class="nav-icon i-Eye font-weight-bold"></i>
                                                        </a>
                                                    </td>   
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                * BIRADS
                -->
                <div class="card ">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                            <a data-toggle="collapse" class="text-default collapsed"
                                href="#accordion-item-icon-right-4">BIRADS</a>
                        </h6>
    
                    </div>
    
    
                    <div id="accordion-item-icon-right-4" class="collapse " data-parent="#accordionRightIcon">
                        <div class="card-body">
                                        
                            <div class="float-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#birads" >Agregar BIRAD</button> 
                                @include('modules/pacientes/modal/modalBirads')
                            </div>

                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="birads" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>Clave de la paciente</th>
                                                <th>Resultado</th>
                                                <th>Nombre de la paciente</th>
                                                <th>Domicilio / Localidad</th>
                                                <th>Repetir estudio</th>
                                            </tr>
                                        </thead>
                
                                        <tbody>
                                            @foreach ($birads as $birad)    
                                                <tr style="text-align:center;">                                        
                                                    <td>{{$birad->curp}}</td>
                                                    <td>{{$birad->resultado}}</td>                                          
                                                    <td>{{$birad->nombre}} {{$birad->aPaterno}} {{$birad->aMaterno}}</td>
                                                    <td>{{$birad->calle}}</td>
                                                    @if($birad->resultado == 'Repetir Estudio')
                                                        <td>Repetir estudio</td>
                                                    @else
                                                        <td>- - - -</td>
                                                    @endif
                                                </tr>
                                            @endforeach  
                                        </tbody>
                                    </table>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /right control icon -->
        </div>
    </div>
    
@endsection

