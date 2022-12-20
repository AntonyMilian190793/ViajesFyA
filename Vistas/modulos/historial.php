<?php

if ($_SESSION["id"] != substr($_GET["url"], 10)) {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Su historial de viajes</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DT">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre y Apellido</th>
                            <th>Inicio de Viaje</th>
                            <th>Fin de Viaje</th>
                            <th>Colegio al que visita</th>
                            <th>Comentario</th>
                            <th>Jefe del Área</th>
                            <th>Área</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $resultado = CitasC::VerCitasDetalladoC();

                            foreach ($resultado as $key => $value){

                                if($_SESSION["documento"] == $value["documento"]){
                                    
                                echo '<tr>
                                    <td>'.($key+1).'</td>
                                    <td>'.$value["nyaP"].'</td>
                                    <td>'.$value["inicio"].'</td>
                                    <td>'.$value["fin"].'</td>
                                    <td>'.$value["colegio"].'</td>
                                    <td>'.$value["comentario"].'</td>';

                                    $columna = "id";
                                    $valor = $value["id_padre"];

                                    $padre = PadresC::PadreC($columna, $valor);

                                    echo '<td>'.$padre["nombre"].' '.$padre["apellido"].'</td>';

                                    

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
                        <br>
    <footer style="position: absolute; footer: 15px; left: 550px;">
        <p><a>© 2022 Jorge Antony Milian Montalvo. Todos los Derechos Reservados</a>.</p>
    </footer>
        </div>
    </section>

</div>


