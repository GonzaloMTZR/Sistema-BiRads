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
                                <input name="nombre" id="my-input" class="form-control" type="text">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Apellido Paterno</label>
                                    <input name="aPaterno" id="my-input" class="form-control" type="text">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Apellido Materno</label>
                                    <input name="aMaterno" id="my-input" class="form-control" type="text">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label name="entidad" for="my-input">Entidad de nacimiento</label>
                                <select class="form-control" name="entidad" id="">
                                    <option value="0" selected="true" disabled>Seleccione un estado</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->nombre_estado}}">{{$estado->nombre_estado}}</option>
                                    @endforeach
                                
                                </select>
                                
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="my-input">CURP</label>
                                <input name="curp" id="my-input" class="form-control" type="text">
                            </div>
                            
        
                            <div class="col-sm-2">
                                <label for="my-input">Edad</label>
                                <input type="text" name="edad" class="form-control">
                            </div>
        
                            <div class="col-sm-2">
                                <label for="my-input">Fecha de nacimiento</label>
                                <input type="date" name="fechaNacimiento" class="form-control">
                            </div>
                        </div>
        
                        <br>
                        <h4 class="sub-title">Datos de residencia habitual</h4>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="my-input">Calle y Numero</label>
                                <input type="text" name="calle" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Colonia</label>
                                <input type="text" name="colonia" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Telefono</label>
                                <input type="text" name="telefono" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Codigo Postal</label>
                                <input type="text" name="codigoPostal" class="form-control">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label name="entidadFederativa" for="my-input">Entidad Federeativa</label>
                                <select class="form-control" name="entidadFederativa" id="entidad">
                                    <option value="0" selected disabled>Seleccione la entidad</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                    
        
                            <div class="col-sm-4">
                                <label name="jurisdiccion" for="my-input">Jurisdicción</label>
                                <select class="form-control" name="jurisdiccion" id="jurisdiccion">
                                    <option value="0" selected disabled>Seleccione una jurisdiccion</option>
                                </select>
                            </div>
        
                            <div class="col-sm-4">
                                    <label for="my-input">Municipio</label>
                                    <select name="municipio" id="municipio" class="form-control">
                                        <option value="0" selected disabled>Seleccione un municipio</option>
                                    </select>
                                </div>
        
                        </div>
        
                        <br>
                        <h4 class="sub-title">Otra Residencia</h4>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="my-input">Calle y Numero</label>
                                <input type="text" name="calle_alter" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Colonia</label>
                                <input type="text" name="colonia_alter" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Municipio</label>
                                <input type="text" name="municipio_alter" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Tiempo de residencia actual</label>
                               <input type="text" name="tiempoResidencia" class="form-control" id="">
                            </div>
                        </div>
        
                        <br>
                        <h4 class="sub-title">Datos de contacto</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Correo electrónico</label>
                                <input type="text" name="correoElectronico" class="form-control">
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Telefono adicional</label>
                                <input type="text" name="telefono_alter" class="form-control">
                            </div>
                        </div>
        
                        <br>
                        <h4 class="sub-title">Datos de afiliación</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Tipo de afiliación</label>
                                <select name="afiliacion" id="" class="form-control">
                                    <option selected disabled>Seleccione afiliación</option>
                                    <option value="Opcion 1">Opción 1</option>
                                </select>
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Otro</label>
                                <input type="text" name="" class="form-control">
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="my-input">Numero de afiliación o póliza</label>
                                <input type="text" name="numeroAfiliacion" class="form-control">
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
@endsection