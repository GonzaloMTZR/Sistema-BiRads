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
                                <td>{{$paciente->entidad}}</td>
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
                                <td><a href="#!">{{$paciente->calle}}</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Colonia</th>
                                <td>{{$paciente->colonia}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Muncipio donde vive</th>
                                <td>{{$paciente->municipio}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Entidad Federativa</th>
                                <td>{{$paciente->entidadFederativa}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jurisdicción</th>
                                <td><a href="#!">{{$paciente->jurisdiccion}}</a></td>
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
                                <td><a href="#!">{{$paciente->telefono}}</a></td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Direccion alternativa</th>
                                <td>{{$paciente->calle_alter}}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Colonia alternativa</th>
                                <td>Colonia: {{$paciente->colonia_alter}}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Municipio</th>
                                <td>{{$paciente->municipio_alter}}</td>
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
        
        
        <div class="card-block">        
            <div class="card">
                <div class="card-header">
                    <h4>Historial de estudios</h4>
                    <div class="float-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#estudio" >Agregar un estudio</button> 
                        @include('modules/pacientes/modalEstudio')

                        <a href="/pacientes/{{$paciente->id}}/edit" class="btn btn-primary" style="background-color:pink; border:none;">Editar paciente</a>
                    </div>
                </div>
                          
            
                <div class="card-block">
                    <div class="table-responsive">
                        <div class="table-content">
                            <div class="project-table">
                                <table id="resultados" class="table table-striped dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>identificador</th>
                                            <th>Resultado</th>
                                            <th>Nombre de la paciente</th>
                                            <th>domicilio</th>
                                            <th>Fecha de la toma</th>
                                            <th>Unidad mádica</th>
                                            
                                        
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($paciente->estudios as $estudio)
                                                <tr>
                                                    <td>{{$paciente->curp}}</td>
                                                    <td>{{$estudio->resultados}}</td>
                                                    <td>{{$paciente->nombre}} {{$paciente->aPaterno}} {{$paciente->aMaterno}}</td>
                                                    <td>{{$paciente->calle}}</td>
                                                    <td>{{$estudio->fechaDeToma}}</td>
                                                    <td>{{$estudio->unidadMedica}}</td>
                                               
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
    
@endsection

@section('js')
    <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function() {
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
        });
    </script>
@endsection