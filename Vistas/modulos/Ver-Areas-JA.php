<?php

if ($_SESSION["rol"] != "JefeArea" ) {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Su Área es...</h1>
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

                                if($value["id_consulta"] == $_SESSION["id"]) {
                                echo ' <a href="Padre/'.$value["id"].'" style="color:black;"><p>'.$value["nombre"].' '.$value["apellido"].'</p></a>';
                            }
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
