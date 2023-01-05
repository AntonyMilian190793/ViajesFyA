$(".DT").on("click", ".EditarSecretaria", function() {

    var Sid = $(this).attr("Sid");
    var datos = new FormData();

    datos.append("Sid", Sid);

    $.ajax({
        url: "Ajax/otroA.php",
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


$(".DT").on("click",".EliminarSecretaria", function(){
    var Sid = $(this).attr("Sid");
    var imgS = $(this).attr("imgS");

    window.location = "index.php?url=secretarias&Sid="+Sid+"&imgS="+imgS;
});




