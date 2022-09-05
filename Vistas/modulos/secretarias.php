<?php

if ($_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de Secretarias</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearSecretaria">Crear Nombre</button>

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
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    
                        $resultado = OtrosC::VerOtrosC();

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
                                        <button class="btn btn-danger EliminarSecretaria" Sid="'.$value["id"].'" imgS="'.$value["foto"].'">
                                        <i class="fa fa-times"> Borrar</i></button>
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

<div class="modal fade" role="dialog" id="CrearSecretaria">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" name="apellido" required>
                            <input type="hidden" name="rolS" value="Logistica">
                        </div>

                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>

                        <div class="form-group">
                            <h2>Usuario:</h2>
                            <input type="text" class="form-control" name="usuario" required>
                        </div>

                        <div class="form-group">
                            <h2>Documento:</h2>
                            <input type="text" class="form-control" name="documento" required>
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
                    $crear = new OtrosC();
                    $crear ->CrearSecretariaC();
                ?>
            </form>
        </div>
    </div>
</div>


<?php

    $borrarP = new OtrosC();
    $borrarP -> BorrarSecretariaC();

?>