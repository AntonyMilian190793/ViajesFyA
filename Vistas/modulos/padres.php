<?php

if ($_SESSION["rol"] != "Otros") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de Padres</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPadre">Crear Nombre</button>

            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Foto</th>
                            <th>Área</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
<!-- 
                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = ConsultasC::VerConsultasC($columna, $valor);

                        foreach ($resultado as $key => $value) {
                            echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>
                                <a href="http://localhost/ViajesFyA/E-C/'.$value["id"].'">
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="fa fa-pencil"> Editar</i></button>
                                    </div>
                                </a>
                                <a href="http://localhost/ViajesFyA/consultas/'.$value["id"].'">
                                    <div class="btn-group">
                                        <button class="btn btn-danger"><i class="fa fa-times"> Borrar</i></button>
                                    </div>
                                </a>
                            </td>
                        </tr>';
                        }
                        ?> -->


                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<div class="modal fade" role="dialog" id="CrearPadre">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="form-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" name="apellido" required>
                            <input type="hidden" name="rolID" value="Padre">
                        </div>

                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>

                        <div class="form-group">
                            <h2>Sexo:</h2>
                            <select class="form-control input-lg" name="sexo">
                                <option>Seleccionar...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Área:</h2>
                            <select class="form-control input-lg" name="consulta">
                                <option>Seleccionar...</option>
                                <option value="Administración">Administración</option>
                                <option value="EBR">EBR</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Usuario:</h2>
                            <input type="text" class="form-control" name="usuario" required>
                        </div>

                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="text" class="form-control" name="clave" required>
                        </div>

                    </div>                            
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

    // $borrarC = new ConsultasC();
    // $borrarC -> BorrarConsulasC();

?>