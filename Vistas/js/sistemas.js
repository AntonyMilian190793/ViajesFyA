$(".DT").on("click", ".EditarSistemas", function() {

    var Sid = $(this).attr("Sid");
    var datos = new FormData();

    datos.append("Sid", Sid);

    $.ajax({
        url: "Ajax/sistemaA.php",
        method: "POST",
        data: datos,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,

        success: function(resultado) {
            $("#Sid").val(resultado["id"]);
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


$(".DT").on("click",".EliminarSistemas", function(){
    var Sid = $(this).attr("Sid");
    var imgS = $(this).attr("imgS");

    window.location = "index.php?url=sistemas&Sid="+Sid+"&imgS="+imgS;
});
