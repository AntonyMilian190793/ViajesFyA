<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Sistemas" && $_SESSION["rol"] != "otrosTrabajadores" && $_SESSION["rol"] != "Logistica") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>


<?php


$pdo = new PDO("mysql:host=localhost; dbname=viajesfya;","root","");
$query=$pdo->prepare("SELECT id, id_padre, id_consulta, nyaP, documento, colegio, comentario, inicio, fin FROM vueloslogistica WHERE id_consulta != 0");
$query->execute();

$resultado=$query->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="content-wrapper">

    <section class="content-header">


    </section>


<section class="content">
    <div class="box">
        <div class="box-body">
            <div id="calendarG"></div>
        </div>
    </div>
</section>

</div>



<div class="modal fade" rol="dialog" id="CalendarioModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                          
                            <input type="hidden" class="form-control input-lg" name="idC" id="idC" readonly>
                        </div>  

                        <div class="form-group">
                            <h2>Datos del Trabajador:</h2>
                            <input type="text" class="form-control input-lg" id="titleC" name="titleC" readonly>
                        </div>  
                        
                        <div class="form-group">
                            <h2>Colegio:</h2>
                            <input type="text" class="form-control input-lg" id="colegioC" name="colegioC" value="" readonly>
                        </div> 

                        <div class="form-group">
                            <h2>Fecha Inicio:</h2>
                            <input type="text" class="form-control input-lg" id="horaS"  name="horaS" value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Fecha Fin:</h2>
                            <input type="text" class="form-control input-lg" id="horaF"  name="horaF" value="" readonly>
                        </div>


                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" id="description" name="description" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="content-wrapper">

    <section class="content-header">


    </section>


<section class="content">
    <div class="box">
        <div class="box-body">
            <div>
                <legend>Leyenda de áreas</legend>
                <div style="display: inline-block; margin-top: 50px;">Contabilidad<span><input type="color" value="#D50000"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Directivos<span><input type="color" value="#E67C73"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBA<span><input type="color" value="#F4511E"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBR Urbano - EBR Rural<span><input type="color" value="#F6BF26"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EPTT<span><input type="color" value="#33B679"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">FyA Digítal<span><input type="color" value="#0B8043"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Legal<span><input type="color" value="#039BE5"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Logística<span><input type="color" value="#3F51B5"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Proyectos<span><input type="color" value="#7986CB"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Recaudo y Voluntariado<span><input type="color" value="#8E24AA"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Recursos Humanos<span><input type="color" value="#616161"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Sistemas<span><input type="color" value="#004063"></span> </div>

            </div>
        </div>
    </div>
</section>

</div>