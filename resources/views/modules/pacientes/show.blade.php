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
                                    <td>No cuenta con una dirección alterna</td>
                                @endif
                            </tr>
                            
                            <tr>
                                <th scope="row">Colonia alternativa</th>
                                @if ($paciente->colonia_alter != 0)
                                    <td>Colonia: {{$paciente->colonia_alter}}</td>
                                @else
                                    <td>No cuenta con una dirección alterna</td>
                                @endif
                                
                            </tr>
                            
                            <tr>
                                <th scope="row">Municipio alterno</th>
                                @if ($paciente->municipio_alter != 0)
                                    <td>{{$paciente->municipio_alter}}</td>
                                @else
                                    <td>No cuenta con una dirección en un municipio alterno</td>
                                @endif
                            </tr>
                            
                            <tr>
                                <th scope="row">Otro telefono</th>
                                <td>{{$paciente->telefono_alter}}</td>
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
        
        
    <br>

    <!-- 
    * Tabla de los factores de riesgo
    -->

    <div class="card-block">     
    
        <div class="card" >
            <div class="card-header" style="background-color:pink">
                <h4>Factores de riesgo</h4>
                <div class="float-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#factorDeRiesgo" >Agregar factor de riesgo</button> 
                    @include('modules/pacientes/modal/modalFactoresRiesgo')
                </div>
            </div>
                        
        
            <div class="card-block">
                <div class="table-responsive">
                    <div class="table-content">
                        <div class="project-table">
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
                                    <tr style="text-align:center;">
                                        @if ($factor != null)
                                            <td>{{$factor->menarca}}</td>   
                                            @if($factor->otroFamiliar == null)
                                                <td>{{$factor->familiaresAnt}}</td>
                                            @else
                                                <td>{{$factor->otroFamiliar}}</td>
                                            @endif    
                                            
                                            <td>{{$factor->menopausia}}</td>

                                            @if($factor->edadMenopausia == null)
                                                <td>N\A</td>
                                            @else
                                                <td>{{$factor->edadMenopausia}}</td>
                                            @endif 
                                            
                                            <td>{{$factor->otrosFactores}}</td>    
                                            <td>{{\Carbon\Carbon::parse($factor->created_at)->format('d/m/Y')}}</td>  
                                            
                                        @else
                                            <td colspan="6">Actualmente este paciente no cuenta con factores de riesgo asociados a su historial clínico.</td>
                                        @endif
                                                                                 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- 
        * Tabla de historial de estudios
        -->
        <div class="card">
            <div class="card-header" style="background-color:pink">
                <h4>Historial de estudios</h4>
                <div class="float-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#estudio" >Agregar un estudio</button> 
                    @include('modules/pacientes/modal/modalEstudio')
                </div>
            </div>
                        
        
            <div class="card-block">
                <div class="table-responsive">
                    <div class="table-content">
                        <div class="project-table">
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
                                    
                                    <tr style="text-align:center;">
                                        @if ($estudio != null)
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
                                        @else
                                            <td colspan="6">Actualmente este paciente no cuenta con estudios asociados a su historial clínico.</td>
                                        @endif
                                                                                 
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
    * Tabla de historial de BIRADS
    -->
    <div class="card">
        <div class="card-header" style="background-color:pink">
            <h4>Historial de estudios BIRAD</h4>
            <div class="float-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#estudio" >Agregar BIRAD</button> 
                @include('modules/pacientes/modal/modalEstudio')
            </div>
        </div>
                    
    
        <div class="card-block">
            <div class="table-responsive">
                <div class="table-content">
                    <div class="project-table">
                        <table id="birads" class="table table-striped dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr style="text-align:center;">
                                    <th >Identificador (CURP)</th>
                                    <th >Nivel de BIRADS</th>
                                    <th >Resultado</th>
                                    <th >Nombre de la paciente</th>
                                    <th >Dirección</th>
                                    <th >Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                
                                <tr style="text-align:center;">
                                    
                                    @if ($birads != null)
                                        @foreach ($birads as $birad)
                                            <td>{{$paciente->curp}}</td>
                                            <td>{{$birad->BIRADS}}</td>
                                            <td>{{$birad->resultado}}</td>
                                            <td>{{$paciente->nombre}} {{$paciente->aPaterno}} {{$paciente->aMaterno}}</td>
                                            <td>{{$paciente->calle}}</td>
                                            <td>Reperir estudio</td>
                                        @endforeach
                                    @else
                                        <td colspan="6">Actualmente este paciente no cuenta con BIRADS asociados a su historial clínico.</td>
                                    @endif
                                                                   
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('js')
    <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script>
        
        $('#factores').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "No hay registros",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se econtraron coincidencias",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                } /* Aqui acaba la paginación */
            } /* Aqui acaba el Languaje */
        });


        $('#resultados').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "No hay registros",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se econtraron coincidencias",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                } /* Aqui acaba la paginación */
            } /* Aqui acaba el Languaje */
        });

        
        $('#birads').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "No hay registros",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se econtraron coincidencias",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                } /* Aqui acaba la paginación */
            } /* Aqui acaba el Languaje */
        });
        
    </script>
@endsection