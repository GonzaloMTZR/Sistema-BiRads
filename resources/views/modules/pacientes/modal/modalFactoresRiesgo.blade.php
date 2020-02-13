<div class="modal fade" id="modalFactorDeRiesgo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Factores de riesgo de la paciente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-block">
                    <form action="/pacientes/{{$paciente->id}}/addFactorRiesgo" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4" id="menarca">
                                <label for="">Menarca</label>
                                <input type="text" name="menarca" class="form-control" placeholder="Edad presencia de la menarca">
                            </div>

                            <div class="col-sm-4">
                                <label for="my-input">Familiares con antecedentes</label>
                                <select name="familiares" id="familiares" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Madre">Madre</option>     
                                    <option value="Abuela Materna">Abuela Materna</option>     
                                    <option value="Abuela Paterna">Abuela Paterna</option>    
                                    <option value="Hija">Hija</option> 
                                    <option value="Hermana">Hermana</option> 
                                    <option value="Otro familiar">Otro</option>    
                                </select>
                            </div>

                            <div class="col-sm-3"  id="otroFamiliar">
                                <label for="">Especifique el familiar</label>
                                <input type="text" name="otroFamiliar" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label for="">Presentó menopausia</label>
                                <select name="menopausia" id="menopausia" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Si">Si</option>     
                                    <option value="No">No</option>      
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div id="edadMenopausia">
                                <label>Edad en la que presentó la menopausia</label>
                                <input class="form-control" type="text" name="edadMenopausia">
                            </div>

                            <div class="col-sm-12" id="otrosFactores">
                                <label for="">Otros factores de riesgo</label>
                                <textarea name="otrosFactores" class="form-control" rows="5"></textarea>
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