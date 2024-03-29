<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica" && $_SESSION["rol"] != "Sistemas") {

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
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>'.$value["nombre"].'</h3>';

                            $columna = "id_consulta";
                            $valor = $value["id"];
                            $padres = PadresC::VerPadresC($columna, $valor);

                            foreach ($padres as $key => $value) {
                                echo ' <a href="Padre/'.$value["id"].'" style="color:black;"><p>'.$value["nombre"].' '.$value["apellido"].'</p></a>';
                            }

                        echo '</div>
                    </div>
                    
                </div>';
                }
            
            ?>

            </div>
            <br>
  <footer style="position: absolute; footer: 15px; left: 550px;">
  <br>
    <p><a style="color:#AA0F16">© 2023 Jorge Antony Milian Montalvo. Todos los Derechos Reservados</a>.</p>
  </footer>
        </div>
    </section>

</div>
