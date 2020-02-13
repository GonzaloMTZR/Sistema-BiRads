<div class="modal fade" id="modalConsultas" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Consulta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-block">
                    <form action="/pacientes/{{$paciente->id}}/addConsulta" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4" id="exploracion_clinica">
                                <label for="my-input">Exploración clínica</label>
                                <select name="exploracion_clinica" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Si">Si</option>     
                                    <option value="No">No</option>        
                                </select>
                            </div>

                            <div class="col-sm-4" >
                                <label for="my-input">Estudio</label>
                                <select name="estudio" id="estudio" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Biopsia">Biopsia</option>     
                                    <option value="Ultrasonido">Ultrasonido</option>     
                                    <option value="Mastografía">Mastografía</option>    
                                    <option value="Otro estudio">Otro</option>    
                                </select>
                            </div>

                            <div class="col-sm-2" id="otro_estudio">
                                <label >Otro</label>
                                <input type="text" name="otro_estudio" class="form-control">
                            </div>

                            <div class="col-sm-4" id="caso_probable">
                                <label for="my-input">Caso probable y confirmación</label>
                                <select name="caso_probable" id="slt_caso_probable" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Si">Si</option>     
                                    <option value="No">No</option>        
                                </select>
                            </div>

                        </div>

                        <div class="form-group row" id="seguimiento_caso">
                            <div class="col-sm-12">
                                <label >Seguimiento de caso confirmado</label>
                                <textarea name="seguimiento_caso" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Seguimiento semestral</label>
                                <select name="seguimiento_semestral" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Si">Si</option>     
                                    <option value="No">No</option>        
                                </select>
                            </div>

                            <div class="col-sm-5">
                                <label>Cédula de defunción (Si se cuenta con una)</label>
                                <input class="form-control" type="text" name="cedula_defuncion">
                            </div>

                            <div class="col-sm-3">
                                <label>Fecha de la consulta</label>
                                <input class="form-control" type="date" name="fecha_consulta">
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

