$(".DT").on("click", ".EditarPadre", function() {

    var Pid = $(this).attr("Pid");
    var datos = new FormData();

    datos.append("Pid", Pid);

    $.ajax({
        url: "Ajax/padresA.php",
        method: "POST",
        data: datos,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,

        success: function(resultado) {
            $("#Pid").val(resultado["id"]);
            $("#apellidoE").val(resultado["apellido"]);
            $("#nombreE").val(resultado["nombre"]);
            $("#usuarioE").val(resultado["usuario"]);
            $("#claveE").val(resultado["clave"]);


            $("#sexoE").html(resultado["sexo"]);
            $("#sexoE").val(resultado["sexo"]);

            $("#consultaE").html(resultado["consulta"]);
            $("#consultaE").val(resultado["consulta"]);
            

        }
    })

});

$(".DT").on("click", ".EliminarPadre", function() {
    var Pid = $(this).attr("Pid");
    var imgD = $(this).attr("imgD");

    window.location = "index.php?url=padres&Pid=" + Pid + "&imgD=" + imgD;
});

$(".DT").DataTable({

    // "lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
    "aProcessing": true, //activamos el procesamiento de databbles
    "aServerSide": true, //paginacion y filtrado realizadosp por el servidor
    dom: '<Bl<f>rtip>', //definimos los elementos del control de la tabla
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdf'
    ],
    "language": {
        sSearch: "Buscar:",
        sEmptyTable: "No hay datos disponibles",
        sZeroRecords: "No se encontraron resultados",
        sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
        sInfoEmpty: "Mostrando 0 a 0 de 0 registros",
        SInfoFiltered: "(Filtrado de _MAX_ registros)",
        oPaginate: {
            sFirst: "Primero",
            sLast: "Último",
            sNext: "Siguiente",
            sPrevious: "Anterior"
        },
        sLoadingRecords: "Cargando...",
        sLengthMenu: "Mostrar _MENU_ Registros",
    }
});


$(".DTTT").DataTable({

    // "lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
    "aProcessing": true, //activamos el procesamiento de databbles
    "aServerSide": true, //paginacion y filtrado realizadosp por el servidor
    dom: '<Bl<f>rtip>', //definimos los elementos del control de la tabla
    buttons: [

    ],
    "language": {
        sSearch: false,
        sEmptyTable: "",
        sZeroRecords: "",
        sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
        sInfoEmpty: "",
        SInfoFiltered: "(Filtrado de _MAX_ registros)",
        oPaginate: {
            sFirst: "",
            sLast: "",
            sNext: "",
            sPrevious: ""
        },
        sLoadingRecords: "Cargando...",
        sLengthMenu: "Mostrar _MENU_ Registros",
    }
});