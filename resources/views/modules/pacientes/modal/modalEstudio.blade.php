<div class="modal fade" id="estudio" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ordenar un estudio al paciente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-block">
                    <form action="/pacientes/{{$paciente->id}}/addEstudio" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="my-input">Tipo de estudio</label>
                                <select name="tipoEstudio" id="tipoEstudio" class="form-control">
                                    <option value="Biopsia">Biopsia</option>     
                                    <option value="Ultrasonido">Ultrasonido</option>     
                                    <option value="Mastografía">Mastografía</option>    
                                    <option value="Otro">Otro (especifique)</option>   
                                </select>
                            </div>

                            <div class="col-sm-4" id="otroEstudio">
                                <label for="">Especifique el estudio</label>
                                <input type="text" name="otroEstudio" class="form-control">
                            </div>

                            <div class="col-sm-4" id="fechaDeToma">
                                <label for="">Fecha de la toma</label>
                                <input type="date" name="fechaDeToma" id="" class="form-control">
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
        $('#otroEstudio').hide();

        $('#tipoEstudio').change(function(e){
            if($(this).val() == 'Otro'){
                $('#otroEstudio').show();
            }else{
                $('#otroEstudio').hide();
            }
        });
    </script>

@endsection