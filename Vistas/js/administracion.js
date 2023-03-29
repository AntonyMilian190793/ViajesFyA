$(".DT").on("click", ".EditarAdministracion", function(){
    var Pid = $(this).attr("Pid");
    var datos = new FormData();

    datos.append("Pid", Pid);

    $.ajax({
        url: "Ajax/administracionA.php",
		method: "POST",
		data: datos,
		dataType: "json",
        contentType: false,
        cache: false,
        processData: false,

            success: function(resultado){
                $("#Pid").val(resultado["id"]);
                $("#nombreE").val(resultado["nombre"]);
                $("#apellidoE").val(resultado["apellido"]);
                $("#usuarioE").val(resultado["usuario"]);
                $("#claveE").val(resultado["clave"]);

            }
    })
});