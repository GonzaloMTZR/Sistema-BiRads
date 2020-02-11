<div class="modal fade" id="birads" tabindex="-1" role="dialog">
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
                                    <option value="1">1</option>     
                                    <option value="2">2</option>    
                                    <option value="3">3</option> 
                                    <option value="4">4</option> 
                                    <option value="5">5</option>    
                                    <option value="6">6</option>
                                </select>
                            </div>

                            <div class="col-sm-4" >
                                <label for="">Resultados</label>
                                <select name="resultado" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Positivo">Positivo</option>     
                                    <option value="Negativo">Negativo</option>  
                                    <option value="Repetir Estudio">Repetir Estudio</option>     
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