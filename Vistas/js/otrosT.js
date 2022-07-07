$(".DT").on("click",".EliminarOtroT", function(){
    var Pid = $(this).attr("Pid");
    var imgOT = $(this).attr("imgOT");

    window.location = "index.php?url=otrosTrabajadores&Pid="+Pid+"&imgOT="+imgOT;
});

$(".DT").on("click",".EditarOtrosT", function(){
    var Pid = $(this).attr("Pid");
    var datos = new FormData();

    datos.append("Pid", Pid);

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
            $("#apellidoE").val(resultado["apellido"]);
            $("#nombreE").val(resultado["nombre"]);
            $("#documentoE").val(resultado["documento"]);
            $("#usuarioE").val(resultado["usuario"]);
            $("#claveE").val(resultado["clave"]);
        }
    })
});

$("#usuario").change(function(){

    $(".alert").remove();

    var usuario = $(this).val();
    var datos = new FormData();
    datos.append("Norepetir", usuario);

    $.ajax({
        url: "Ajax/otrosTA.php",
		method: "POST",
		data: datos,
		dataType: "json",
		cache: false,
		contentType: false,
		processData: false,

        success: function(resultado){

            if(resultado){

                $("#usuario").parent().after('<div class="alert alert-danger">Este usuario ya existe</div>');
                $("#usuario").val("");
            }
        }
    })

});

$("#usuarioE").change(function(){

    $(".alert").remove();

    var usuario = $(this).val();
    var datos = new FormData();
    datos.append("Norepetir", usuario);

    $.ajax({
        url: "Ajax/otrosTA.php",
		method: "POST",
		data: datos,
		dataType: "json",
		cache: false,
		contentType: false,
		processData: false,

        success: function(resultado){

            if(resultado){

                $("#usuarioE").parent().after('<div class="alert alert-danger">Este usuario ya existe</div>');
                $("#usuarioE").val("");

            }
        }
    })

});