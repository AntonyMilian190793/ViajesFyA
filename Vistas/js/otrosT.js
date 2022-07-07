$(".DT").on("click",".EliminarOtroT", function(){
    var OTid = $(this).attr("OTid");
    var imgOT = $(this).attr("imgOT");

    window.location = "index.php?url=otrosTrabajadores&OTid="+OTid+"&imgOT="+imgOT;
});