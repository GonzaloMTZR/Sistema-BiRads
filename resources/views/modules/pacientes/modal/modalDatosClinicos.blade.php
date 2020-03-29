<div class="modal fade" id="modalDatosClinicos" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Datos clínicos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-block">
                    <form action="/pacientes/{{$paciente->id}}/addDatoClinico" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Menstruación</label>
                                <select name="menstruacion" id="menstruacion" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Si">Si</option>     
                                    <option value="No">No</option>        
                                </select>
                            </div>

                            <div class="col-sm-4" id="fecha_menstruacion">
                                <label >Fecha de la ultima menstruación</label>
                                <input type="date" name="fecha_menstruacion" class="form-control">
                            </div>

                            <div class="col-sm-4" >
                                <label for="my-input">Signos clínicos</label>
                                <select name="signos_clinicos" id="signos_clinicos" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Nódulos sólidos, irregular de consistencia dura fijo a planos profundos.">Nódulos sólidos, irregular de consistencia dura fijo a planos profundos.</option>     
                                    <option value="Cambios cutáneos evidentes (piel de naranja retracción de la piel, lesión areolar que no cicatriza a pesar del tratamiento).">Cambios cutáneos evidentes (piel de naranja retracción de la piel, lesión areolar que no cicatriza a pesar del tratamiento).</option>     
                                    <option value="Zona de sistematización en el tejido glandular focalizado a una sola mama y región.">Zona de sistematización en el tejido glandular focalizado a una sola mama y región.</option>    
                                    <option value="Secreción serosanguinolenta.">Secreción serosanguinolenta.</option> 
                                    <option value="Crecimiento ganglionar axilar o supraclavicular.">Crecimiento ganglionar axilar o supraclavicular.</option> 
                                    <option value="Retracción o fijación del pezón.">Retracción o fijación del pezón.</option>
                                    <option value="Ninguna">Ninguna</option>
                                    <option value="Otro signo">Otro</option>    
                                </select>
                            </div>


                        </div>

                        <div class="form-group row" id="especificacion_signo">
                            <div class="col-sm-12">
                                <label >Especifique el signo clinico</label>
                                <textarea name="especificacion_signo" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6" id="localizacion">
                                <label>Indique la localización del signo clínico</label>
                                <input class="form-control" type="text" name="localizacion">
                            </div>

                            <div class="col-sm-6" id="fecha_localizacion">
                                <label>Fecha de localización del signo clínico</label>
                                <input class="form-control" type="date" name="fecha_localizacion">
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