$(".DT").on("click",".EliminarAdministracion", function(){
    var Aid = $(this).attr("Aid");
    var imgA = $(this).attr("imgA");

    window.location = "index.php?url=administracion&Aid="+Aid+"&imgA="+imgA;
});