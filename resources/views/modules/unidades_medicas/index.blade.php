@extends('layouts.master')
@section('title', 'listado de unidades médicas')

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

    @if(session()->has('success-message'))
        <div class="alert alert-success background-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('success-message') }}
        </div>
    @endif

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
                    <div class="table-responsive">
                        <table id="unidades-medicas" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Uniadad Médica</th>
                                    <th scope="col">Localidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($unidadesMedicas as $unidadMedica)
                                    <tr>
                                        <td>{{$unidadMedica->nombre_unidadMedica}}</td>
                                        <td>{{$unidadMedica->nombre_localidad}}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">Uniadad Médica</th>
                                    <th scope="col">Localidad</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection