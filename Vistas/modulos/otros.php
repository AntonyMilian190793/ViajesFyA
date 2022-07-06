<?php

if ($_SESSION["rol"] != "Otros") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor Otros</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearOtros">Crear Nombre</button>

            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DT">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Documento</th>
                            <th>Foto</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td>Milian</td>
                            <td>Jorge</td>
                            <td>70311233</td>
                            <td><img src="Vistas/img/defecto.png" width="40px"></td>



                            <td>jmilian</td>
                            <td>123</td>
                            
                            
                            <td>
                                
                            <div class="btn-group">
                                <button class="btn btn-success EditarPadre" Pid="" data-toggle="modal" data-target="#EditarOtro"><i class="fa fa-pencil"> 
                                Editar</i></button>
                            </div>
                                
                                
                                    <div class="btn-group">
                                        <button class="btn btn-danger EliminarPadre" Pid="" imgD="">
                                        <i class="fa fa-times"> Borrar</i></button>
                                    </div>
                                
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<div class="modal fade" role="dialog" id="CrearOtros">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" name="apellido" required>
                            <input type="hidden" name="rolS" value="Sistemas">
                        </div>

                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>

                        <div class="form-group">
                            <h2>Documento:</h2>
                            <input type="text" class="form-control" name="documento" required>
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
                    // $crear = new PadresC();
                    // $crear ->CrearPadreC();
                ?>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="EditarOtro">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Apellidos:</h2>
                            <input type="text" class="form-control" id="apellidoE" name="apellidoE" required>
                            <input type="hidden" id="Oid" name="Oid">
                        </div>

                        <div class="form-group">
                            <h2>Nombres:</h2>
                            <input type="text" class="form-control" id="nombreE" name="nombreE" required>
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
                    <button type="submit" class="btn btn-success">Guarda Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>

                <?php
                    // $actualizar = new PadresC();
                    // $actualizar ->ActualizarPadreC();
                ?>
            </form>
        </div>
    </div>
</div>

<?php

    // $borrarP = new PadresC();
    // $borrarP -> BorrarPadreC();

?>