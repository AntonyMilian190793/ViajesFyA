$(".DTE").on("click", ".EditarVuelo", function(){
    var Pid = $(this).attr("Pid");
    var datos = new FormData();

    datos.append("Pid", Pid);

    $.ajax({
        url: "Ajax/citasA.php",
		method: "POST",
		data: datos,
		dataType: "json",
		cache: false,
		contentType: false,
		processData: false,

            success: function(resultado){
                $("#Pid").val(resultado["id"]);
                $("#nombreE").val(resultado["nyaP"]);
            }
    })
});