@extends('layouts.master')
@section('title', 'Lista de jurisdicciones')

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
        <h1>Jurisdicciones</h1>
        <ul>
            <li><a href="/jurisdicciones">Jurisdicciones</a></li>
            <li>Listado de Jurisdicciones</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Jurisdicciones</h4>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="jurisdicciones" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Jurisdicción</th>
                                    <th>Municipio</th>
                                    <th>Localidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurisdicciones as $jurisdiccion)
                                    <tr>
                                        <td>{{$jurisdiccion->estado}}</td>
                                        <td>{{$jurisdiccion->jurisdiccion}}</td>
                                        <td>{{$jurisdiccion->municipio}}</td>
                                        <td>{{$jurisdiccion->localidad}}</td>
                                    <td>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#acciones{{$jurisdiccion->id}}" aria-expanded="false" aria-controls="acciones">
                                            Acciones
                                        </button>

                                        <div class="collapse" id="acciones{{$jurisdiccion->id}}">
                                            <div class="card card-body">
                                                <ul class="">
                                                    <li class=""><a href="/jurisdicciones/{{$jurisdiccion->id}}"><i class="nav-icon i-Clock-4"></i></a></li>
                                                    <li>Editar</li>
                                                    <li>Borrar</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Estado</th>
                                    <th>Jurisdicción</th>
                                    <th>Municipio</th>
                                    <th>Localidad</th>
                                    <th>Acciones</th>
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
            $('#jurisdicciones').DataTable({
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
