$(".DTEV").on("click", ".EliminarVuelo", function() {
    var Pid = $(this).attr("Pid");

    window.location = "index.php?url=VuelosTabla&Pid=" + Pid;
});

                        function mostrar2() {
                            Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Evento eliminado!',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }



                        
$(".DTE").DataTable({
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