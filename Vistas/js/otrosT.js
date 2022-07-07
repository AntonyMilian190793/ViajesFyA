$(".DT").on("click",".EliminarOtroT", function(){
    var Pid = $(this).attr("Pid");
    var imgOT = $(this).attr("imgOT");

    window.location = "index.php?url=otrosTrabajadores&Pid="+Pid+"&imgOT="+imgOT;
});

$(".DT").on("click",".EditarOtrosT", function(){
    var Pid = $(this).attr("Pid");
    var datos = new FormData();

    datos.append("Pid",Pid);

    $.ajax({
        url: "Ajax/otrosTA.php",
		method: "POST",
		data: datos,
		dataType: "json",
		cache: false,
		contentType: false,
		processData: false,

        success: function(resultado){
            $("#Pid").val(resultado["id"]);
            $("#apellidoE").val(resultado["apellidoE"]);
            $("#nombreE").val(resultado["nombreE"]);
            $("#documentoE").val(resultado["documentoE"]);
            $("#usuarioE").val(resultado["usuario"]);
            $("#claveE").val(resultado["clave"]);
        }
    })
});