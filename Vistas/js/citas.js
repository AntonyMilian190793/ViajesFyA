$(".DTEV").on("click", ".EliminarVuelo", function() {
    var Pid = $(this).attr("Pid");

    window.location = "index.php?url=VuelosTabla&Pid=" + Pid;
});

