<div class="modal fade" id="estudio" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Aregar un estudio al paciente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-block">
                    <form action="/pacientes/{{$paciente->id}}/addEstudio" method="post">
                        @csrf

                        <h4 class="sub-title">Datos de la institucion donde fue el estudio</h4>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Institución</label>
                                <input type="text" name="institucion" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">Entidad/Delegación</label>
                                <select name="entidad" id="entidad" class="form-control">
                                    <option value="0" selected disabled>Seleccione un estado</option>
                                    
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">Jurisdicción</label>
                                <select name="jurisdiccion" id="" class="form-control">
                                    <option value="Opcion 1">Opcion 1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Municipio</label>
                                <select name="municipio" id="" class="form-control">
                                    <option value="Opcion 1">Opcion 1</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">Localidad</label>
                                <select name="localidad" id="" class="form-control">
                                    <option value="Opcion 1">Opcion 1</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">Unidad Medica</label>
                                <select name="unidadMedica" id="" class="form-control">
                                    <option value="Opcion 1">Opcion 1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">CLUES</label>
                                <input type="text" name="clues" id="" class="form-control">
                            </div>
                        </div>
                        
                        <br>
                        <h4 class="sub-title">Datos de la muestra</h4>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">Fecha de la toma</label>
                                <input type="date" name="fechaDeToma" id="" class="form-control">
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="">BIRADS</label>
                                <select name="birads" id="" class="form-control">
                                    <option value="Opcion 1">Opcion 1</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label for="">Resultado</label>
                                <select name="resultados" id="" class="form-control">
                                    <option value="Opcion 1">Opcion 1</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Cerrar</button>
                    <button type="sumbit" class="btn waves-effect waves-light" style="background-color:pink;">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('js')
    
@endsection