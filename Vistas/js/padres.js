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