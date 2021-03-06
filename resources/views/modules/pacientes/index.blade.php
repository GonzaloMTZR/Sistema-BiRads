@extends('layouts.master')
@section('title', 'Lista de pacientes')

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
        <h1>Pacientes</h1>
        <ul>
            <li><a href="/pacientes">Pacientes</a></li>
            <li>Listado de pacientes</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Pacientes</h4>
            <p>Si desea buscar o agregar un estudio al paciente de click en su nombre.</p>
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

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="pacientes" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Domicilio</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Entidad</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($pacientes as $paciente)
                                    @if (Auth::user()->id == $paciente->user_id)
                                        <tr>
                                            <td>{{$paciente->nombre}}</td>
                                            <td>{{$paciente->calle}}</td>
                                            <td>{{$paciente->nombre_municipio}}</td>
                                            <td>{{$paciente->nombre_estado}}</td>
                                            <td>

                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="/pacientes/{{$paciente->id}}" class="btn btn-success ">
                                                        <i class="nav-icon i-Eye font-weight-bold"></i>
                                                    </a>
    
                                                    <a href="/pacientes/{{$paciente->id}}/edit" class="btn btn-warning">
                                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                    </a>
                                                    
                                                    <form method="POST" action="/pacientes/{{$paciente->id}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" style="border:none;">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </button>   
                                                    </form>              
    
                                                </div>
                                                                                    
                                            </td>
                                        
                                        </tr>
                                    @endif
                                    
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Domicilio</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Entidad</th>
                                    <th scope="col">Acciones</th>
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
            $('#pacientes').DataTable({
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
