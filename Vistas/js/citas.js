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