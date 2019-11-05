@extends('layouts.master')
@section('title', 'Registrar una a Paciente')

@section('main-content')
    <div class="breadcrumb">
        <h1>Formulario de actualizción de datos del paciente</h1>
        <ul>
            <li><a href="/pacientes">Pacientes</a></li>
            <li>Actualizción de datos del paciente { {$paciente->nomrbe}}</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Actualizacion de paciente</h4>
            <p>Modifique la información que crea conveniente.</p>
        </div>
    </div>

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
                                    <option selected disabled>Seleccione la entidad</option>
                                    
                                    
                                
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
                                <label for="my-input">Municipio</label>
                                <input type="text" name="municipio" class="form-control">
                            </div>
        
                            <div class="col-sm-3">
                                <label for="my-input">Codigo Postal</label>
                                <input type="text" name="codigoPostal" class="form-control">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label name="entidadFederativa" for="my-input">Entidad Federeativa</label>
                                <select class="form-control" name="entidadFederativa" id="">
                                    <option selected disabled>Seleccione la entidad</option>
                                    
                                </select>
                            </div>
                    
        
                            <div class="col-sm-4">
                                <label name="jurisdiccion" for="my-input">Jurisdicción</label>
                                <select class="form-control" name="jurisdiccion" id="">
                                    <option selected disabled>Seleccione la entidad</option>
                                    <option value= "Abasolo">Abasolo</option>
                                    <option value= "Aldama">Aldama</option>
                                    <option value= "Altamira">Altamira</option>
                                    <option value= "Antiguo Morelos">Antiguo Morelos</option>
                                    <option value= "Burgos">Burgos</option>
                                    <option value= "Bustamante"> Bustamante</option>
                                    <option value= "Camargo"> Camargo</option>
                                    <option value= "Casas">  Casas</option>
                                    <option value= "Cruillas">Cruillas</option>
                                    <option value= "Güémez">Güémez</option>
                                    <option value= "Gómez Farías">Gómez Farías</option>
                                    <option value= "González">González</option>
                                    <option value= "Guerrero"> Guerrero</option>
                                    <option value= "Gustavo Díaz Ordaz">  Gustavo Díaz Ordaz</option>
                                    <option value= "Hidalgo"> Hidalgo</option>
                                    <option value= "Jaumave"> Jaumave</option>
                                    <option value= "Jiménez">Jiménez</option>
                                    <option value= "Llera">Llera</option>
                                    <option value= "Madero">Madero</option>
                                    <option value= "Mainero">Mainero</option>
                                    <option value= "Mante">Mante</option>
                                    <option value= "Matamoros"> Matamoros</option>
                                    <option value= "Méndez"> Méndez</option>
                                    <option value= "Mier"> Mier</option>
                                    <option value= "Miguel Alemán"> Miguel Alemán</option>
                                    <option value= "Miquihuana"> Miquihuana</option>
                                    <option value= "Nuevo Laredo"> Nuevo Laredo</option>
                                    <option value= "Nuevo Morelos">Nuevo Morelos</option>
                                    <option value= "Ocampo">Ocampo</option>
                                    <option value= "Padilla">Padilla</option>
                                    <option value= "Palmillas">Palmillas</option>
                                    <option value= "Reynosa"> Reynosa</option>
                                    <option value= "Río Bravo">Río Bravo</option>
                                    <option value= "San Carlos"> San Carlos</option>
                                    <option value= "San Fernando">San Fernando</option>
                                    <option value= "San Nicolás">San Nicolás</option>
                                    <option value= "Soto la Marina"> Soto la Marina</option>
                                    <option value= "Tampico">  Tampico</option>
                                    <option value= "Tula"> Tula</option>
                                    <option value= "Valle Hermoso">Valle Hermoso</option>
                                    <option value= "Victoria">Victoria</option>
                                    <option value= "Villagránvalue">Villagrán</option>
                                    <option value= "Xicoténcatlvalue">Xicoténcatl</option>
                                </select>
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Telefono</label>
                                <input type="text" name="telefono" class="form-control">
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
                                <select name="tiempoResidencia" id="" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Opcion 1">Opción 1</option>
                                </select>
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
                            <button type="submit" class="col-sm-12 btn btn-success">Actualizar Paciente</button>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection