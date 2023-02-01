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
                <div style="display: inline-block; margin-top: 50px;">Contabilidad<span><input type="color" value="#CD5C5C"></span> </div>
                <div style="display: inline-block; margin-top: 50px;">Comunicación e Incidencia<span><input type="color" value="#FF6347"></span> </div>
                <div style="display: inline-block; margin-top: 50px;">Identidad y Misión<span><input type="color" value="#9ACD32"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Directivos<span><input type="color" value="#FFBF65"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBA<span><input type="color" value="#87CEEB"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBR Urbano<span><input type="color" value="#6C88C4"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBR Rural<span><input type="color" value="#c3dff9"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EPTT<span><input type="color" value="#C05780"></span> </div>
                <hr>
                <div style="display: inline-block; margin-top: 50px; ">FyA Digital<span><input type="color" value="#00B0BA"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Legal<span><input type="color" value="#B196C1"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Logística<span><input type="color" value="#57838D"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Proyectos<span><input type="color" value="#BDB76B"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Recaudo y Voluntariado<span><input type="color" value="#6A5ACD"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Recursos Humanos<span><input type="color" value="#6B8E23"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Sistemas<span><input type="color" value="#4682B4"></span> </div>

            </div>
        </div>
    </div>
</section>

</div>