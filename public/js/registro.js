/**
* Script para obtener las jurisdicciones
*/
$('#entidad').on('change', function (e) {
    //console.log($('#entidad option:selected').val());
    var estado_id = e.target.value;

    $.get('/getJurisdicciones?estado_id='+estado_id, function(data){
        //console.log(data);
        $('#jurisdiccion').empty();
        $('#jurisdicion').append('<option value="0" selected="true" >Seleccione una jurisdicción</option>');

        $.each(data, function(index, jurisdiccionObj){
            $('#jurisdiccion').append('<option value="'+jurisdiccionObj.id+'" selected="true">'+jurisdiccionObj.nombre_jurisdiccion+'</option>')
        });
    });
});

/**
* Script para obtener los municipios
*/
$('#jurisdiccion').on('change', function (e) {
    //console.log($('#jurisdiccion option:selected').val());
    var jurisdiccion_id = e.target.value;

    $.get('/getMunicipios?jurisdiccion_id='+jurisdiccion_id, function(data){
        //console.log(data);
        $('#municipio').empty();
        $('#municipio').append('<option value="0" selected="true" >Seleccione un municipio</option>');

        $.each(data, function(index, municipioObj){
            $('#municipio').append('<option value="'+municipioObj.id+'" selected="true">'+municipioObj.nombre_municipio+'</option>')
        });
    });
});

/**
* Script para obtener las localidades
*/
$('#municipio').on('change', function (e){
    //console.log($('#municipio option:selected').val());
    var municipio_id = e.target.value;

    $.get('/getLocalidades?municipio_id='+municipio_id, function(data){
        //console.log(data);
        $('#localidad').empty();
        $('#localidad').append('<option value="0" selected="true" >Seleccione un localidad</option>');

        $.each(data, function(index, localidadObj){
            $('#localidad').append('<option value="'+localidadObj.id+'" selected="true">'+localidadObj.nombre_localidad+'</option>')
        });
    });
});

/**
* Script para obtener las unidades medicas
*/
$('#localidad').on('change', function (e){
    //console.log($('#localidad option:selected').val());
    var localidad_id = e.target.value;

    $.get('/getUnidadesMedicas?localidad_id='+localidad_id, function(data){
        //console.log(data);
        $('#unidadMedica').empty();
        $('#unidadMedica').append('<option value="0" selected="true" >Seleccione una unidad médica</option>');

        $.each(data, function(index, unidadMedicaObj){
            $('#unidadMedica').append('<option value="'+unidadMedicaObj.id+'" selected="true">'+unidadMedicaObj.nombre_unidadMedica+'</option>')
        });
    });
});


/************************************************************/
/**
 * Seccion para los datos del doomicio extra del paciente
*/

/**
* Script para obtener las jurisdicciones
*/
$('#entidad_alter').on('change', function (e) {
    //console.log($('#entidad option:selected').val());
    var estado_id = e.target.value;

    $.get('/getJurisdicciones?estado_id='+estado_id, function(data){
        //console.log(data);
        $('#jurisdiccion_alter').empty();
        $('#jurisdicion_alter').append('<option value="0" selected="true" >Seleccione una jurisdicción</option>');

        $.each(data, function(index, jurisdiccionObj){
            $('#jurisdiccion_alter').append('<option value="'+jurisdiccionObj.id+'" selected="true">'+jurisdiccionObj.nombre_jurisdiccion+'</option>')
        });
    });
});

/**
* Script para obtener los municipios
*/
$('#jurisdiccion_alter').on('change', function (e) {
    //console.log($('#jurisdiccion option:selected').val());
    var jurisdiccion_id = e.target.value;

    $.get('/getMunicipios?jurisdiccion_id='+jurisdiccion_id, function(data){
        //console.log(data);
        $('#municipio_alter').empty();
        $('#municipio_alter').append('<option value="0" selected="true" >Seleccione un municipio</option>');

        $.each(data, function(index, municipioObj){
            $('#municipio_alter').append('<option value="'+municipioObj.id+'" selected="true">'+municipioObj.nombre_municipio+'</option>')
        });
    });
});

/**
* Script para obtener las localidades
*/
$('#municipio_alter').on('change', function (e){
    //console.log($('#municipio option:selected').val());
    var municipio_id = e.target.value;

    $.get('/getLocalidades?municipio_id='+municipio_id, function(data){
        //console.log(data);
        $('#localidad_alter').empty();
        $('#localidad_alter').append('<option value="0" selected="true" >Seleccione un localidad</option>');

        $.each(data, function(index, localidadObj){
            $('#localidad_alter').append('<option value="'+localidadObj.id+'" selected="true">'+localidadObj.nombre_localidad+'</option>')
        });
    });
});

