<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

if ($_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor Jefes de Área</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearTrabajador">Crear Nombre</button>

            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped DT">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Foto</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    
                        $resultado = AdministracionC::VerAdministracionTC();

                        foreach ($resultado as $key => $value) {

                            echo '
                            
                            <tr>
                                <td>'.($key+1).'</td>
                                <td>'.$value["apellido"].'</td>
                                <td>'.$value["nombre"].'</td>';

                                if($value["foto"] == ""){

                                    echo '<td><img src="Vistas/img/defecto1.png" class="img-responsive" width="40px"></td>';

                                }
                                else{

                                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                                }


                                
                            

                                echo '
                                <td>'.$value["usuario"].'</td>
                                <td>'.$value["clave"].'</td>
                          
                            
                            <td>
                                <div class="btn-group">
                                        <button class="btn btn-success EditarAdministracion" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarAdministracion"><i class="fa fa-pencil">Editar</i></button>
                                    </div>
                                
                                    <div class="btn-group">
                                        <button class="btn btn-danger EliminarAdministracion" Aid="'.$value["id"].'" imgA="'.$value["foto"].'"><i class="fa fa-times"> Borrar</i></button>
                                    </div>
                                
                            </td>
                        </tr> ';
                        }
                    
                    ?>





                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<div class="modal fade" role="dialog" id="CrearTrabajador">
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
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" name="apellido" required>
                            <input type="hidden" name="rolA" value="JefeArea">
                        </div>

                        <div class="form-group">
                            <h2>Documento:</h2>
                                <input type="text" class="form-control" name="documento" required pattern="[0-9]{8}" placeholder="8 dígitos">
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
                    $crear = new AdministracionC();
                    $crear ->CrearAdministracionC();
                ?>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" rol="dialog" id="EditarAdministracion">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" id="Pid" name="Pid">
                        </div>  

                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control input-lg" id="nombreE" name="nombreE">
                        </div>

                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control input-lg" id="apellidoE" name="apellidoE">
                        </div>

                            <div class="form-group">
                             <h2>Usuario:</h2>
                                <input type="text" class="form-control input-lg" id="usuarioE" name="usuarioE">
                        </div>

                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="text" class="form-control input-lg" id="claveE" name="claveE">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" onclick="mostrar4()">Guardar Cambios</button>
                    <script>
                        function mostrar4() {
                            Swal.fire({
                            icon: 'success',
                            title: 'Evento actualizado!',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }
                    </script>
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="mostrar5()">Cancelar</button>
                    <script>
                        function mostrar5() {
                            Swal.fire({
                            icon: 'error',
                            title: 'Evento no registrado!',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }
                    </script>

                </div>

                <?php

                    $actualizar = new AdministracionC();
                    $actualizar -> ActualizarAdministracionC();

                ?>

            </form>
        </div>
    </div>
</div>


<?php

    $borrarP = new AdministracionC();
    $borrarP -> BorrarAdministracionC();

?>