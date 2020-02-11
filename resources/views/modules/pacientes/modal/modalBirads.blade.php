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
                    <form action="/pacientes/{{$paciente->id}}/birads" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4" id="menarca">
                                <label for="">Fecha de toma</label>
                                <input type="date" name="fecha_de_toma" id="menarca" class="form-control" placeholder="Fecha cuando se realizó el estudio">
                            </div>

                            <div class="col-sm-4"  id="familares">
                                <label for="my-input">BIARDS</label>
                                <select name="birads" id="birads" class="form-control">
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

                            <div class="col-sm-4" id="manopausia">
                                <label for="">Resultados</label>
                                <select name="resultados" id="resultados" class="form-control">
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