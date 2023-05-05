<?php

if ($_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor Directivos</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPadre">Crear Nombre</button>

            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DT">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>N° Documento</th>
                            <th>Foto</th>
                            <th>Área</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = PadresC::VerPadresC($columna, $valor);

                        foreach ($resultado as $key => $value) {
                            echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>'.$value["apellido"].'</td>
                            <td>'.$value["documento"].'</td>';

                            if($value["foto"] == ""){

                                echo '<td><img src="Vistas/img/defecto1.png" width="40px"></td>';
                            }else{
                                
                                echo '<td><img src="'.$value["foto"].'" width="40px"></td>';
                            }

                            $columna = "id";
                            $valor = $value["id_consulta"];

                            $consulta = ConsultasC::VerConsultasC($columna, $valor);

                            echo '<td>'.$consulta["nombre"].'</td>
                            <td>'.$value["usuario"].'</td>
                            <td>'.$value["clave"].'</td>
                            
                            
                            <td>
                                
                            <div class="btn-group">
                                <button class="btn btn-success EditarPadre" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarPadre"><i class="fa fa-pencil"> 
                                Editar</i></button>
                            </div>
                                
                                
                                    <div class="btn-group">
                                        <button class="btn btn-danger EliminarPadre" Pid="'.$value["id"].'" imgD="'.$value["foto"].'">
                                        <i class="fa fa-times"> Borrar</i></button>
                                    </div>
                                
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

<div class="modal fade" role="dialog" id="CrearPadre">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">

                    <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" name="nombre" required placeholder="Nombre">
                        </div>

                        
                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" name="apellido" required placeholder="Apellido">
                            <input type="hidden" name="rolP" value="Directivo">
                        </div>

                        <div class="form-group">
                            <h2>Sexo:</h2>
                            <select class="form-control input-lg" name="sexo" required>
                                <option>Seleccionar...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Área:</h2>
                            <select class="form-control input-lg" name="consulta" required>
                                <option>Seleccionar...</option>

                                <?php

                                    $columna = null;
                                    $valor = null;

                                    $resultado = ConsultasC::VerConsultasC($columna, $valor);

                                    foreach ($resultado as $key => $value) {
                                        echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                                    }

                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <h2>Documento:</h2>
                            <input type="text" class="form-control" name="documento" required pattern="[0-9]{8}" placeholder="8 dígitos">
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

                <?php
                    $crear = new PadresC();
                    $crear ->CrearPadreC();
                ?>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="EditarPadre">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" id="apellidoE" name="apellidoE" required>
                            <input type="hidden" id="Pid" name="Pid">
                        </div>

                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" id="nombreE" name="nombreE" required>
                        </div>

                        <div class="form-group">
                            <h2>Sexo:</h2>
                            <select class="form-control input-lg" name="sexoE" required>
                                <option id="sexoE"></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <h2>Usuario:</h2>
                            <input type="text" class="form-control" id="usuarioE" name="usuarioE" required>
                        </div>

                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="text" class="form-control" id="claveE" name="claveE" required>
                        </div>

                    </div>                            
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guarda Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>

                <?php
                    $actualizar = new PadresC();
                    $actualizar ->ActualizarPadreC();
                ?>
            </form>
        </div>
    </div>
</div>

<?php

    $borrarP = new PadresC();
    $borrarP -> BorrarPadreC();

?>