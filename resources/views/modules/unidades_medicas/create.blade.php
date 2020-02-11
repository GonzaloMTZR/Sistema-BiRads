@extends('layouts.master')
@section('title', 'Registrar una jurisdicción')

@section('main-content')
    <div class="breadcrumb">
        <h1>Formulario de registro de unidades médicas</h1>
        <ul>
            <li><a href="/unidades-medicas">Unidades Médicas</a></li>
            <li>Registro unidades medicas</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Registro de unida médicas</h4>
            <p>Complete toda la información solicitada para registrar una unidad meédica al sistema</p>
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
                    <form action="/unidades-medicas" method="post">
                        @csrf

                        <h4 class="sub-title">Datos de la unidad médica</h4>
                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label for="my-input">Seleccione la localidad donde se encuentra la unidad médica</label>
                                <select name="nombre_localidad" class="form-control" id="">
                                    <option select disabled>Seleccione el estado</option>
                                    @foreach ($localidades as $localidad)
                                        <option value="{{$localidad->id}}">{{$localidad->nombre_localidad}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label for="my-input">Nombre de la unidad médica</label>
                                <input id="my-input" class="form-control" type="text" name="nombre_unidadMedica">
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