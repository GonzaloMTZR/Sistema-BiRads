<div class="modal fade" id="modalBirads" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">BIRADS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-block">
                    <form action="/pacientes/{{$paciente->id}}/addBirad" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">Fecha de toma</label>
                                <input type="date" name="fecha_de_toma" class="form-control" placeholder="Fecha cuando se realizó el estudio">
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">BIARDS</label>
                                <select name="birads" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="0">0</option>     
                                    <option value="4">4</option> 
                                    <option value="5">5</option>    
                                </select>
                            </div>

                            <div class="col-sm-4" >
                                <label for="">Resultados</label>
                                <select name="resultado" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Se necesita evaluación adicional">Se necesita evaluación adicional</option>     
                                    <option value="Resultado Sospechoso">Resultado Sospechoso</option>  
                                    <option value="Alto riesgo de cáncer">Alto riesgo de cáncer</option>     
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