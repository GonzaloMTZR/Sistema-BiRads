@extends('layouts.master')
@section('title', 'Lista de usuarios registrados')

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
        <h1>Usuarios</h1>
        <ul>
            <li><a href="/usuarios">Usuarios</a></li>
            <li>Listado de usuarios</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Usuarios</h4>
            <p>Listado de usuarios que se encuentran registrados en el sistema.</p>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="pacientes" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo Electrónico</th>
                                    <th scope="col">Sistema</th>
                                    <th scope="col">Institucion</th>
                                    <th scope="col">Entidad</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($usuarios as $usuario)
                                
                                    <tr>
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>{{$usuario->sistema}}</td>
                                        <td>{{$usuario->institucion}}</td>
                                        <td>{{$usuario->entidad}}</td>
                                        <td>{{$usuario->municipio}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-warning">
                                                    <i class="nav-icon i-Pen-2"></i>
                                                </a>
                                                <form method="POST" action="/usuarios/{{$usuario->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger mr-2" style="border:none;">
                                                        <i class="nav-icon i-Close-Window "></i>
                                                    </button>   
                                                </form>      

                                            </div>
                                            
                                            
                                                                                   
                                        </td>
                                    
                                    </tr>
                                   
                                    
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo Electrónico</th>
                                    <th scope="col">Sistema</th>
                                    <th scope="col">Institucion</th>
                                    <th scope="col">Entidad</th>
                                    <th scope="col">Municipio</th>
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
