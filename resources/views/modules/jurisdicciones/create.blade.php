@extends('layouts.master')
@section('title', 'Registrar una jurisdicción')

@section('main-content')
    <div class="breadcrumb">
        <h1>Formulario de registro de jurisdicciones</h1>
        <ul>
            <li><a href="/jurisdicciones">jurisdicciones</a></li>
            <li>Registro de jurisdicciones y unidades medicas</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Registro de jurisdicciones</h4>
            <p>Complete toda la información solicitada para registrar una jurisdicción y una unidad meédica al sistema</p>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <form action="/jurisdicciones" method="post">
                        @csrf
                        
                        <h4 class="sub-title">Datos de la jurisdicción</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Estado</label>
                                <input type="text" name="estado" class="form-control"> 
                            </div>
        
                            <div class="col-sm-4">
                                <label for="my-input">Jurisdicción</label>
                                <input type="text" name="jurisdiccion" class="form-control"> 
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">Municipio</label>
                                <input type="text" name="municipio" class="form-control">                                    
                            </div>

                        </div>
        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Codigo de localidad</label>
                                <input type="text" name="codigo_localidad" class="form-control"> 
                            </div>

                            <div class="col-sm-4">
                                <label name="entidad" for="my-input">Localidad</label>
                                <input type="text" name="localidad" class="form-control"> 
                            </div>     
                            
                            <div class="col-sm-4">
                                <label name="entidad" for="my-input">Unidad Médica</label>
                                <input type="text" name="unidad_medica" class="form-control"> 
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