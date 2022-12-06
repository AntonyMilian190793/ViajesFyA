<?php

if ($_SESSION["rol"] != "Directivo") {

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
