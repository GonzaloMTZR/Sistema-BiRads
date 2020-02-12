@extends('layouts.master')
@section('title', 'listado de unidades médicas')

@section('main-content')
    <div class="breadcrumb">
        <h1>Listado de unidades médicas</h1>
        <ul>
            <li><a href="/unidades-medicas">Unidades Médicas</a></li>
            <li>Listado de unidades medicas</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Listado de unida médicas</h4>
            <p>Listado de las unidades médicas que han sido registradas.</p>
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
                        <table id="unidades_medicas" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Uniadad Médica</th>
                                    <th>Localidad</th>
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
                                    <th>Uniadad Médica</th>
                                    <th>Localidad</th>
                                </tr>
                            </tfoot>
                        </table>
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
            $('#unidades_medicas').DataTable({
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
