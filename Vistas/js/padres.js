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