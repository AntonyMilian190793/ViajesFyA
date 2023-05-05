<?php

if ($_SESSION["rol"] != "Sistemas" ) {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de Colegios</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <!-- corregir esta parte para subir los archivos CSV -->
                <form method="post">
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="consultasN" placeholder="Ingrese Nueva Consulta" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Colegio </button>

                    <hr>
<h3>Subir datos con CSV</h3>
    <form action="archivosCVSColegios/recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
        <div class="file-input text-center">
            <input  type="file" name="dataCliente" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
        

        <button class="btn btn-success btn-lg" type="submit" name="subir" class="btn-enviar" value="Subir Excel">Subir CSV</button>
                </form>

                <?php

                $crearC = new ColegiosC();
                $crearC-> CrearColegiosC();

                ?>
            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DTE">
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

                        $resultado = ColegiosC::VerColegiosC($columna, $valor);

                        foreach ($resultado as $key => $value) {
                            echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>
                                <a href="http://localhost/ViajesFyA/E-Co/'.$value["id"].'">
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="fa fa-pencil"> Editar</i></button>
                                    </div>
                                </a>
                                <a href="http://localhost/ViajesFyA/colegios/'.$value["id"].'">
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
            
            <br>
    <footer style="position: absolute; footer: 15px; left: 550px;">
    <br>
        <p><a style="color:#AA0F16">© 2023 Jorge Antony Milian Montalvo. Todos los Derechos Reservados</a>.</p>
    </footer>
        </div>
    </section>

</div>

<?php

    $borrarC = new ColegiosC();
    $borrarC -> BorrarColegiosC();

?>