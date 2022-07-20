<?php

if ($_SESSION["id"] != substr($_GET["url"], 10)) {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Historial de Viajes</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DT">
                    <thead>
                        <tr>
                            
                            <th>Fecha y Hora de Viaje</th>
                            <th>Jefe</th>
                            <th>Área</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $resultado = CitasC::VerCitasC();

                            foreach ($resultado as $key => $value){

                                if($_SESSION["documento"] == $value["documento"]){
                                    
                                echo '                        
                                <tr>
                                    <td>'.$value["inicio"].'</td>';

                                    $columna = "id";
                                    $valor = $value["id_padre"];

                                    $padre = PadresC::PadreC($columna, $valor);

                                    echo '<td>'.$padre["apellido"].' '.$padre["nombre"].'</td>';

                                    

                                    $columna = "id";
                                    $valor = $value["id_consulta"];

                                    $consulta = ConsultasC::VerConsultasC($columna, $valor);
                                    
                                    echo '
                                        <td>'.$consulta["nombre"].'</td>
                                </tr>';
                                }

                            }
                        
                        ?> 




                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>


