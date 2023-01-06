<?php

if ($_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de otros Trabajadores</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearOtrosT">Crear Nombre</button>

<hr>
<h3>Subir datos con CSV</h3>
    <form action="archivosCVS/recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
        <div class="file-input text-center">
            <input  type="file" name="dataCliente" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
        

        <button class="btn btn-success btn-lg" type="submit" name="subir" class="btn-enviar" value="Subir Excel">Subir CSV</button>
    
    </form>

            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DT">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombres y Apellidos</th>
                            <th>Documento</th>
                            <th>Área</th>
                            <th>Foto</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = OtrosTC::VerOtrosTC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>'.$value["documento"].'</td>
                            <td>'.$value["apellido"].'</td>';

                            if($value["foto"] == ""){
                                echo ' <td><img src="Vistas/img/defecto1.png" width="40px"></td>';

                            }else{
                                echo ' <td><img src="'.$value["foto"].'" width="40px"></td>';
                            }
                            


                            echo '
                            <td>'.$value["usuario"].'</td>
                            <td>'.$value["clave"].'</td>
                            
                            
                            <td>
                                
                            <div class="btn-group">
                                <button class="btn btn-success EditarOtrosT" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarOtrosT"><i class="fa fa-pencil"> 
                                Editar</i></button>

                                
                                

                                        <button class="btn btn-danger EliminarOtroT" Pid="'.$value["id"].'" imgOT="'.$value["foto"].'">
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
        <p><a>© 2022 Jorge Antony Milian Montalvo. Todos los Derechos Reservados</a>.</p>
    </footer>
        </div>
    </section>

</div>

<div class="modal fade" role="dialog" id="CrearOtrosT">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">

                    <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>

                        <div class="form-group">
                            <h2>Área:</h2>
                            <input type="text" class="form-control" name="apellido" required>
                            <input type="hidden" name="rolOT" value="otrosTrabajadores">
                        </div>



                        <div class="form-group">
                            <h2>Documento:</h2>
                                <input type="text" class="form-control" name="documento" required pattern="[0-9]{8}" placeholder="8 dígitos">
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
                            <h2>Usuario:</h2>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
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
                $crear = new OtrosTC();
                $crear->CrearOtrosTC();
                ?>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="EditarOtrosT">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" id="nombreE" name="nombreE" required>
                        </div>

                        <div class="form-group">
                            <h2>Área:</h2>
                            <input type="text" class="form-control" id="apellidoE" name="apellidoE" required>
                            <input type="hidden" id="Pid" name="Pid">
                        </div>

                        <div class="form-group">
                            <h2>Documento:</h2>
                            <input type="text" class="form-control" id="documentoE" name="documentoE" required>
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
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>

                <?php
                    $actualizar = new OtrosTC();
                    $actualizar ->ActualizarOtrosTC();
                ?>
            </form>
        </div>
    </div>
</div>

<?php

$borrarP = new OtrosTC();
$borrarP -> BorrarOtrosTC();

?>