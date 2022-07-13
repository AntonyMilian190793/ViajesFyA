<?php

if ($_SESSION["rol"] != "Administracion") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <?php

        $columna = "id";
        $valor = substr($_GET["url"], 6);

        $resultado = PadresC::PadreC($columna, $valor);

        if($resultado["sexo"] == "Femenino"){
            echo '<h1>Trabajadora: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';
        }else{
            echo '<h1>Trabajador: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';
        }


        $columna = "id";

        $valor = $resultado["id_consulta"];

        $consultorio = ConsultasC::VerConsultasC($columna, $valor);


        echo '        
        <br>
            <h1>Área de : '.$consultorio["nombre"].'</h1>';
        ?>

        
        

    </section>


    <section class="content">
        <div class="box">

            <div class="box-body">

            </div>
        </div>
    </section>

</div>
