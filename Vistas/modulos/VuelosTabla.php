<?php

if ($_SESSION["rol"] != "Logistica" && $_SESSION["rol"] != "Directivo") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>



<div class="content-wrapper">

    <section class="content-header">
        <h1>Buscar Trabajadores</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                
            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DTE">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Colegio</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = CitasC::VerVuelosLogisticaC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nyaP"].'</td>
                            <td>'.$value["documento"].'</td>
                            <td>'.$value["colegio"].'</td>
                            <td>'.$value["inicio"].'</td>
                            <td>'.$value["fin"].'</td>
                            <td>
                            <div class="btn-group">
                                <button class="btn btn-success"><i class="fa fa-pencil"> 
                                Editar</i></button>
                                
                                        <button class="btn btn-danger EliminarVuelo" Pid="'.$value["id"].'">
                                        <i class="fa fa-times"> Borrar</i></button>
                                    </div>
                            </td>
                        </tr>';
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<?php

    $borrarP = new CitasC();
    $borrarP -> BorrarCitasC();

?>