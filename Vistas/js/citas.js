$(".DTE").on("click", ".EliminarVuelo", function() {
    var Pid = $(this).attr("Pid");

    window.location = "index.php?url=VuelosTabla&Pid=" + Pid;
});


$(".DTE").DataTable({
        
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
        sLengthMenu: "Mostrar _MENU_ Registros",}

});