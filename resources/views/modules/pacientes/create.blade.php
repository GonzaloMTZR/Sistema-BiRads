@extends('layouts.master')
@section('title', 'Registrar una a Paciente')

@section('main-content')
    <div class="breadcrumb">
        <h1>Formulario de registro de paciente</h1>
        <ul>
            <li><a href="/pacientes">Pacientes</a></li>
            <li>Registro de pacientes</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Registro de pacientes</h4>
            <p>Complete toda la información solicitada para registrar a un paciente al sistema</p>
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
                                <input name="nombre" id="my-input" class="form-control" type="text"  value="{{ old('nombre') }}">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Apellido Paterno</label>
                                    <input name="aPaterno" id="my-input" class="form-control" type="text" value="{{ old('aPaterno') }}">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Apellido Materno</label>
                                    <input name="aMaterno" id="my-input" class="form-control" type="text" value="{{ old('aMaterno') }}">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label name="entidad" for="my-input">Entidad de nacimiento</label>
                                <select class="form-control" name="entidad" id="" value="{{ old('entidad') }}">
                                    <option value="0" selected="true" disabled>Seleccione un estado</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->nombre_estado}}">{{$estado->nombre_estado}}</option>
                                    @endforeach
                                
                                </select>
                                
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="my-input">CURP</label>
                                <input name="curp" id="my-input" class="form-control" type="text" value="{{ old('curp') }}">
                            </div>
                            
        
                            <div class="col-sm-2">
                                <label for="my-input">Edad</label>
                                <input type="text" name="edad" class="form-control" value="{{ old('edad') }}">
                            </div>
        
                            <div class="col-sm-2">
                                <label for="my-input">Fecha de nacimiento</label>
                                <input type="date" name="fechaNacimiento" class="form-control" value="{{ old('fechaNacimiento') }}">
                            </div>
                        </div>
        
                        <br>
                        <hr>
                        <h4 class="sub-title">Datos de residencia habitual</h4>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="my-input">Calle y Numero</label>
                                <input type="text" name="calle" class="form-control" value="{{ old('calle') }}">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Colonia</label>
                                <input type="text" name="colonia" class="form-control" value="{{ old('colonia') }}">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Telefono</label>
                                <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Codigo Postal</label>
                                <input type="text" name="codigoPostal" class="form-control" value="{{ old('codigoPostal') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="">Manzana</label>
                                <input type="text" class="form-control" name="manzana" value="{{ old('manzana') }}">
                            </div>

                            <div class="col-sm-3">
                                <label for="">Lote</label>
                                <input type="text" class="form-control" name="lote" value="{{ old('lote') }}">
                            </div>

                            <div class="col-sm-4">
                                <label for="">Entre Calles</label>
                                <textarea name="entreCalles" class="form-control" value="{{ old('entreCalles') }}"></textarea>
                            </div>

                            <div class="col-sm-2">
                                <label for="my-input">Tiempo de Residencia</label>
                               <input type="text" name="tiempoResidencia" class="form-control" id="" value="{{ old('tiempoResidencia') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="">Referencia del Domicilio</label>
                                <textarea name="referenciaDom" class="form-control" rows="5" value="{{ old('referenciaDom') }}"></textarea>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label name="entidadFederativa" for="my-input">Entidad Federeativa</label>
                                <select class="form-control" name="entidadFederativa" id="entidad" value="{{ old('entidadFederativa') }}">
                                    <option value="0" selected disabled>Seleccione la entidad</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                    
        
                            <div class="col-sm-3">
                                <label name="jurisdiccion" for="my-input">Jurisdicción</label>
                                <select class="form-control" name="jurisdiccion" id="jurisdiccion">
                                    <option value="0" selected disabled>Seleccione una jurisdiccion</option>
                                </select>
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Municipio</label>
                                <select name="municipio" id="municipio" class="form-control">
                                    <option value="0" selected disabled>Seleccione un municipio</option>
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="my-input">Localidad</label>
                                <select name="localidad" id="localidad" class="form-control">
                                    <option value="0" selected disabled>Seleccione una localidad</option>
                                </select>
                            </div>
        
                        </div>
                        
                        
                        <br>
                        <hr>
                        <h4 class="sub-title">Otra Residencia</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                    <label class="switch pr-5 switch-success mr-3">
                                        <span>¿Tiene otra residencia?</span>
                                        <input type="checkbox" id="switchRes" value="0">
                                        <span class="slider"></span>
                                    </label>
                            </div>
                        </div>

                        <div id="otraResidencia">                        
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="my-input">Calle y Numero</label>
                                    <input type="text" name="calle_alter" class="form-control" value="{{ old('calle_alter') }}">
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Colonia</label>
                                    <input type="text" name="colonia_alter" class="form-control" value="{{ old('colonia_alter') }}">
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Telefono</label>
                                    <input type="text" name="telefono_alter" class="form-control" value="{{ old('telefono_alter') }}">
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Codigo Postal</label>
                                    <input type="text" name="codigoPostal_alter" class="form-control" value="{{ old('codigoPostal_alter') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="">Manzana</label>
                                    <input type="text" class="form-control" name="manzana_alter" value="{{ old('manzana_alter') }}">
                                </div>

                                <div class="col-sm-3">
                                    <label for="">Lote</label>
                                    <input type="text" class="form-control" name="lote_alter" value="{{ old('lote_alter') }}">
                                </div>

                                <div class="col-sm-6">
                                    <label for="">Entre Calles</label>
                                    <textarea name="entreCalles_alter" class="form-control" value="{{ old('entreCalles_alter') }}"></textarea>
                                </div>

                                
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="">Referencia del Domicilio</label>
                                    <textarea name="referenciaDom_alter" class="form-control" rows="5" value="{{ old('referenciaDom_alter') }}"></textarea>
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label name="entidadFederativa_alter" for="my-input">Entidad Federeativa</label>
                                    <select class="form-control" name="entidadFederativa_alter" id="entidad_alter" value="{{ old('entidadFederativa_alter') }}">
                                        <option value="0" selected disabled>Seleccione la entidad</option>
                                        @foreach ($estados as $estado)
                                            <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        
            
                                <div class="col-sm-3">
                                    <label name="jurisdiccion" for="my-input">Jurisdicción</label>
                                    <select class="form-control" name="jurisdiccion_alter" id="jurisdiccion_alter">
                                        <option value="0" selected disabled>Seleccione una jurisdiccion</option>
                                    </select>
                                </div>
            
                                <div class="col-sm-3">
                                    <label for="my-input">Municipio</label>
                                    <select name="municipio_alter" id="municipio_alter" class="form-control">
                                        <option value="0" selected disabled>Seleccione un municipio</option>
                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <label for="my-input">Localidad</label>
                                    <select name="localidad_alter" id="localidad_alter" class="form-control">
                                        <option value="0" selected disabled>Seleccione una localidad</option>
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
                                <input type="text" name="correoElectronico" class="form-control" value="{{ old('correoElectronico') }}">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Telefono adicional</label>
                                <input type="text" name="telefono_alter" class="form-control" value="{{ old('telefono_alter') }}">
                            </div>
                        </div>
        
                        <br>
                        <h4 class="sub-title">Datos de afiliación</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Tipo de afiliación</label>
                                <select name="afiliacion" id="afiliacion" class="form-control" value="{{ old('afiliacion') }}">
                                    <option selected disabled>Seleccione afiliación</option>
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
                                <input type="text" name="otraAfiliacion" id="otro" class="form-control" value="{{ old('otraAfiliacion') }}" disabled>
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="my-input">Numero de afiliación o póliza</label>
                                <input type="text" name="numeroAfiliacion"  value="{{ old('numeroAfiliacion') }}" class="form-control">
                            </div>
                            
                        </div>
    
                        
                        <div class="form-group">
                            <button type="submit" class="col-sm-12 btn" style="background-color:pink;">Guardar</button>
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

        $(document).ready(function() {
            $('#otraResidencia').hide();

            $('#switchRes').change(function(){
                if(!$(this).prop('checked')){
                    $('#otraResidencia').hide();
                }else{
                    $('#otraResidencia').show();
                }
            });

            $('#afiliacion').change(function (){  
                if($(this).val() === 'Medica Privada'){
                    $("#otro").prop('disabled', false);
                }else if($(this).val() === 'Otras'){
                    $("#otro").prop('disabled', false);
                }else{
                    $("#otro").prop('disabled', true);
                }
            });
        
        });
        
    </script>
@endsection