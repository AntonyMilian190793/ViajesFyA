<?php

if ($_SESSION["rol"] != "Otros") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de Consultas</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <form method="post">
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="consultasN" placeholder="Ingrese Nueva Consulta" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Consulta </button>
                </form>

                <?php

                $crearC = new ConsultasC();
                $crearC->CrearConsultasC();

                ?>
            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = ConsultasC::VerConsultasC($columna, $valor);

                        foreach ($resultado as $key => $value) {
                            echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>
                                <a href="http://localhost/ViajesFyA/">
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="fa fa-pencil"> Editar</i></button>
                                    </div>
                                </a>
                                <a href="http://localhost/ViajesFyA/">
                                    <div class="btn-group">
                                        <button class="btn btn-danger"><i class="fa fa-times"> Borrar</i></button>
                                    </div>
                                </a>
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