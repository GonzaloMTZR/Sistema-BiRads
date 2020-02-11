<div class="modal fade" id="factorDeRiesgo" tabindex="-1" role="dialog">
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
                                <input type="text" name="menarca" id="menarca" class="form-control" placeholder="Edad presencia de la menarca">
                            </div>

                            <div class="col-sm-4"  id="familares">
                                <label for="my-input">Familiares con antecedentes</label>
                                <select name="familiares" id="familiares" class="form-control">
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="Madre">Madre</option>     
                                    <option value="Abuela Materna">Abuela Materna</option>     
                                    <option value="Abuela Paterna">Abuela Paterna</option>    
                                    <option value="Hija">Hija</option> 
                                    <option value="Hermana">Hermana</option> 
                                    <option value="Otro">Otro</option>    
                                </select>
                            </div>

                            <div class="col-sm-3"  id="otroFamiliar">
                                <label for="">Especifique el familiar</label>
                                <input type="text" name="otroFamiliar" id="otroFamiliar" class="form-control">
                            </div>

                            <div class="col-sm-4" id="manopausia">
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
                                <label for="my-input">Edad en la que presentó la menopausia</label>
                                <input id="my-input" class="form-control" type="text" name="edadMenopausia">
                            </div>

                            <div class="col-sm-12" id="otrosFactores">
                                <label for="">Otros factores de riesgo</label>
                                <textarea name="otrosFactores" id="" class="form-control" rows="5"></textarea>
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
<script>
    
    $('#otroFamiliar').hide();
    $('#edadMenopausia').hide();
    console.log('entro en factor de riesgo');


    $('#familiares').change(function(e){
        if($(this).val() == 'Otro'){
            $('#otroFamiliar').show();

            $('#menarca').removeClass('col-sm-4');
            $('#menarca').addClass('col-sm-3');

            $('#familares').removeClass('col-sm-4');
            $('#familares').addClass('col-sm-3');

            $('#otroFamiliar').removeClass('col-sm-3');
            $('#otroFamiliar').addClass('col-sm-3');

            $('#manopausia').removeClass('col-sm-4');
            $('#manopausia').addClass('col-sm-3');

        }else{
            $('#otroFamiliar').hide();

            $('#menarca').removeClass('col-sm-3');
            $('#menarca').addClass('col-sm-4');

            $('#familares').removeClass('col-sm-3');
            $('#familares').addClass('col-sm-4');

            $('#otroFamiliar').removeClass('col-sm-3');
            $('#otroFamiliar').addClass('col-sm-3');

            $('#manopausia').removeClass('col-sm-4');
            $('#manopausia').addClass('col-sm-4');
        }

    });

    $('#menopausia').change(function(e){
        if($(this).val() == 'Si'){
            $('#edadMenopausia').show();
            $('#edadMenopausia').addClass('col-sm-3');
            $('#otrosFactores').removeClass('col-sm-12');
            $('#otrosFactores').addClass('col-sm-9');
        }else{
            $('#edadMenopausia').hide();
            $('#otrosFactores').addClass('col-sm-12');

        }
    });
    
</script>
   
@endsection