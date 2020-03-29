@extends('layouts.master')
@section('title', 'Registrar una a Paciente')

@section('main-content')
    <div class="breadcrumb">
        <h1>Formulario para actualización de paciente</h1>
        <ul>
            <li><a href="/pacientes">Pacientes</a></li>
            <li>Editar de pacientes</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Actualización de datos del pacientes</h4>
            <p>Complete toda la información solicitada para actualizar a un paciente al sistema</p>
        </div>
    </div>

    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger background-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <p>{{$error}}</p>
            </div>
        @endforeach
    @endif

    

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <form action="/pacientes" method="post">
                        @csrf
                        
                        <h4 class="sub-title">Datos Personales</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Nombre</label>
                                <input name="nombre" id="my-input" class="form-control" type="text"  value="{{$paciente->nombre}}">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Apellido Paterno</label>
                                    <input name="aPaterno" id="my-input" class="form-control" type="text" value="{{$paciente->aPaterno}}">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Apellido Materno</label>
                                    <input name="aMaterno" id="my-input" class="form-control" type="text" value="{{$paciente->aMaterno}}">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label name="entidad" for="my-input">Entidad de nacimiento</label>
                                <select class="form-control" name="entidad" id="">
                                    <option value="" selected="true" disabled>{{$estadosNombres->nombre_estado}}</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->nombre_estado}}">{{$estado->nombre_estado}}</option>
                                    @endforeach
                                
                                </select>
                                
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="my-input">CURP</label>
                                <input name="curp" id="my-input" class="form-control" type="text" value="{{$paciente->curp}}">
                            </div>
                            
        
                            <div class="col-sm-2">
                                <label for="my-input">Edad</label>
                                <input type="text" name="edad" class="form-control" value="{{$paciente->edad}}">
                            </div>
        
                            <div class="col-sm-2">
                                <label for="my-input">Fecha de nacimiento</label>
                                <input type="date" name="fechaNacimiento" class="form-control" value="{{$paciente->fechaNacimiento}}">
                            </div>
                        </div>
        
                        <br>
                        <hr>
                        <h4 class="sub-title">Datos de residencia habitual</h4>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="my-input">Calle y Numero</label>
                                <input type="text" name="calle" class="form-control" value="{{$paciente->calle}}">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Colonia</label>
                                <input type="text" name="colonia" class="form-control" value="{{$paciente->colonia}}">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Telefono</label>
                                <input type="text" name="telefono" class="form-control" value="{{$paciente->telefono}}">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Codigo Postal</label>
                                <input type="text" name="codigoPostal" class="form-control" value="{{$paciente->codigoPostal}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="">Manzana</label>
                                <input type="text" class="form-control" name="manzana" value="{{$paciente->manzana}}">
                            </div>

                            <div class="col-sm-3">
                                <label for="">Lote</label>
                                <input type="text" class="form-control" name="lote" value="{{$paciente->lote}}">
                            </div>

                            <div class="col-sm-4">
                                <label for="">Entre Calles</label>
                                <textarea name="entreCalles" class="form-control" value="">{{$paciente->entreCalles}}</textarea>
                            </div>

                            <div class="col-sm-2">
                                <label for="my-input">Tiempo de Residencia</label>
                               <input type="text" name="tiempoResidencia" class="form-control" id="" value="{{$paciente->tiempoResidencia}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="">Referencia del Domicilio</label>
                                <textarea name="referenciaDom" class="form-control" rows="5" value="">{{$paciente->referenciaDom}}</textarea>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label name="entidadFederativa" for="my-input">Entidad Federeativa</label>
                                <select class="form-control" name="entidadFederativa" id="entidad" value="{{ old('entidadFederativa') }}">
                                    <option value="" selected="true" disabled>{{$estadosNombres->nombre_estado}}</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                    
        
                            <div class="col-sm-3">
                                <label name="jurisdiccion" for="my-input">Jurisdicción</label>
                                <select class="form-control" name="jurisdiccion" id="jurisdiccion">
                                    <option value="" selected="true" disabled>{{$estadosNombres->nombre_jurisdiccion}}</option>
                                </select>
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Municipio</label>
                                <select name="municipio" id="municipio" class="form-control">
                                    <option value="" selected="true" disabled>{{$estadosNombres->nombre_municipio}}</option>
                                    
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="my-input">Localidad</label>
                                <select name="localidad" id="localidad" class="form-control">
                                    <option value="" selected="true" disabled>{{$estadosNombres->nombre_localidad}}</option>
                                  
                                </select>
                            </div>
        
                        </div>
                        
                        
                        <br>
                        <hr>
                        <h4 class="sub-title">Otra Residencia</h4>

                        <div id="otraResidencia">                        
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="my-input">Calle y Numero</label>
                                    <input type="text" id="calle_alter" name="calle_alter" class="form-control" value="{{$paciente->calle_alter}}">
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Colonia</label>
                                    <input type="text" name="colonia_alter" class="form-control" value="{{$paciente->colonia_alter}}">
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Telefono</label>
                                    <input type="text" name="telefono_alter" class="form-control" value="{{$paciente->telefono_alter}}">
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Codigo Postal</label>
                                    <input type="text" name="codigoPostal_alter" class="form-control" value="{{$paciente->codigoPostal_alter}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="">Manzana</label>
                                    <input type="text" class="form-control" name="manzana_alter" value="{{$paciente->manzana_alter}}">
                                </div>

                                <div class="col-sm-3">
                                    <label for="">Lote</label>
                                    <input type="text" class="form-control" name="lote_alter" value="{{$paciente->lote_alter}}">
                                </div>

                                <div class="col-sm-6">
                                    <label for="">Entre Calles</label>
                                    <textarea name="entreCalles_alter" class="form-control" value="{{$paciente->entreCalles_alter}}"></textarea>
                                </div>

                                
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="">Referencia del Domicilio</label>
                                    <textarea name="referenciaDom_alter" class="form-control" rows="5" value="{{$paciente->referenciaDom_alter}}"></textarea>
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label name="entidadFederativa_alter" for="my-input">Entidad Federeativa</label>
                                    <select class="form-control" name="entidadFederativa_alter" id="entidad_alter">
                                        
                                            <option value="" selected="true" disabled>{{$estadosNombres->nombre_estado}}</option>
                                        
                                            @foreach ($estados as $estado)
                                                <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                                            @endforeach
                                        
                                    </select>
                                </div>
                        
            
                                <div class="col-sm-3">
                                    <label name="jurisdiccion" for="my-input">Jurisdicción</label>
                                    <select class="form-control" name="jurisdiccion_alter" id="jurisdiccion_alter">
                                        <option value="" selected="true" disabled>{{$estadosNombres->nombre_jurisdiccion}}</option>
                                    </select>
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Municipio</label>
                                    <select name="municipio_alter" id="municipio_alter" class="form-control">
                                        <option value="" selected="true" disabled>{{$estadosNombres->nombre_municipio}}</option>
                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <label for="my-input">Localidad</label>
                                    <select name="localidad_alter" id="localidad_alter" class="form-control">
                                        <option value="" selected="true" disabled>{{$estadosNombres->nombre_localidad}}</option>
                                    </select>
                                </div>
            
                            </div>
                        </div>
        
                        <br>
                        <hr>
                        <h4 class="sub-title">Datos de contacto</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Correo electrónico</label>
                                <input type="text" name="correoElectronico" class="form-control" value="{{$paciente->correoElectronico}}">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Telefono adicional</label>
                                <input type="text" name="telefono_alter" class="form-control" value="{{$paciente->telefono_alter}}">
                            </div>
                        </div>
        
                        <br>
                        <h4 class="sub-title">Datos de afiliación</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Tipo de afiliación</label>
                                <select name="afiliacion" id="afiliacion" class="form-control" >
                                    <option value="{{$paciente->afiliacion}}" selected disabled>{{$paciente->afiliacion}}</option>
                                    <option value="Seguro Popular">Seguro Popular</option>
                                    <option value="IPSSET">IPSSET</option>
                                    <option value="IMSS">IMSS</option>
                                    <option value="PEMEX">PEMEX</option>
                                    <option value="SEDENA">SEDENA</option>
                                    <option value="SEMAR">SEMAR</option>
                                    <option value="Medica Privada">Médica Privada</option>
                                    <option value="Otras">Otras</option>
                                </select>
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Otro</label>
                                <input type="text" name="otraAfiliacion" id="otro" class="form-control" value="{{$paciente->otraAfiliacion}}" disabled>
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="my-input">Numero de afiliación o póliza</label>
                                <input type="text" name="numeroAfiliacion"  value="{{$paciente->numeroAfiliacion}}" class="form-control">
                            </div>
                            
                        </div>
    
                        
                        <div class="form-group">
                            <button type="submit" class="col-sm-12 btn" style="background-color:pink;">Agregar</button>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/registro.js')}}"></script>
    <script>

        $('#afiliacion').change(function (){  
            if($(this).val() === 'Medica Privada'){
                $("#otro").prop('disabled', false);
            }else if($(this).val() === 'Otras'){
                $("#otro").prop('disabled', false);
            }else{
                $("#otro").prop('disabled', true);
            }
        });
        
        
    </script>
@endsection