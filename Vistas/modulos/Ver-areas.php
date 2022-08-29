<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica" && $_SESSION["rol"] != "JefeArea" && $_SESSION["rol"] != "otrosTrabajadores") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Elegir una Área:</h1>
    </section>

    <section class="content">
        <div class="box">

            <div class="box-body">

            <?php

                $columna = null;
                $valor = null;

                $resultado = ConsultasC::VerConsultasC($columna, $valor);

                //esta parte para cambiar colores
                foreach ($resultado as $key => $value) {
                    echo '
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>'.$value["nombre"].'</h3>';

                            $columna = "id_consulta";
                            $valor = $value["id"];
                            $padres = PadresC::VerPadresC($columna, $valor);

                            foreach ($padres as $key => $value) {
                                echo ' <a href="Padre/'.$value["id"].'" style="color:black;"><p>'.$value["apellido"].' '.$value["nombre"].'</p></a>';
                            }

                        echo '</div>
                    </div>
                    
                </div>';
                }
            
            ?>

            </div>
        </div>
    </section>

</div>
