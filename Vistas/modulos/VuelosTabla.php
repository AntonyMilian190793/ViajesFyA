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

if ($_SESSION["rol"] != "Logistica" && $_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Sistemas" && $_SESSION["rol"] != "otrosTrabajadores") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>



<div class="content-wrapper">

    <section class="content-header">
        <h1>Buscar Viajes de Trabajadores</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">


                
            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DTEV">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Datos del Trabajador</th>
                            <th>Descripción</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Comentario</th>
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
                            <td>'.$value["colegio"].'</td>
                            <td>'.$value["inicio"].'</td>
                            <td>'.$value["fin"].'</td>
                            <td>'.$value["comentario"].'</td>
                            <td>';

                            if($_SESSION["nombre"] == "Nataly Grecia"){

                            
                            echo '<div class="btn-group">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EditarModal"><i class="fa fa-pencil">Editar</i></button>
                                
                                        <button class="btn btn-danger EliminarVuelo" onclick="mostrar3()" Pid="'.$value["id"].'">
                                        <i class="fa fa-times"> Borrar</i></button>
                                    </div>
                            </td>
                        </tr>';
                        }else if($_SESSION["rol"] == "Sistemas"){
                            echo ' 
                        <button class="btn btn-success EditarVuelo" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarModal"><i class="fa fa-pencil">Editar</i></button>
                                    <button class="btn btn-danger EliminarVuelo" onclick="mostrar2()" Pid="'.$value["id"].'">
                                    <i class="fa fa-times"> Borrar</i></button>
                                </div>
                        </td>
                    </tr>';
                    

                        }else{

                            }
                        }

                        ?>

<div class="modal fade" rol="dialog" id="EditarModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" id="Pid" name="Pid">
                        </div>  

                        <div class="form-group">
                            <h2>Datos del Trabajador:</h2>
                            <input type="text" class="form-control input-lg" id="nombreE" name="nombreE" readonly>
                        </div>  

                        <div class="form-group">
                            <h2>Fecha Inicio:</h2>
                            <input type="datetime-local" class="form-control input-lg" id="inicioE"  name="inicioE" value="">
                        </div>

                        <div class="form-group">
                            <h2>Fecha Fin:</h2>
                            <input type="datetime-local" class="form-control input-lg" id="finE"  name="finE" value="">
                        </div>

                            <div class="form-group">
                             <h2>Seleccionar Colegio:</h2>
                            <select class="form-control input-lg" id="controlBuscadora" name="nombreCo" style="width: 100%">
                                <option id="nombreCo"></option>    
                                <option>Colegio...</option>

                                
                        </div>
                            <?php

                                $columna = null;
                                $valor = null;
                                $resultado	= ColegiosC::VerColegiosC($columna, $valor);
                                            
                
                                foreach ($resultado as $key => $value) {

                                    echo '<option value="'.$value["nombre"].' ">'.$value["nombre"].'</option>';
                                }
                            
                            ?>
                        </div> 

                            <div class="form-group">

                            <h2></h2>
                             <input type="hidden">
                        </div>


                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" id="comentarioE" name="comentarioE">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                </div>

            </form>
        </div>
    </div>
</div>

                    
                    <script>
                        function mostrar2() {
                            Swal.fire({
                            icon: 'error',
                            title: 'Evento eliminado!',
                            showConfirmButton: false,
                            timer: 2000
                            })
                        }

                        function mostrar3() {
                            Swal.fire({
                            icon: 'error',
                            title: 'Evento eliminado!',
                            showConfirmButton: false,
                            timer: 2000
                            })
                        }
                    </script>

                    </tbody>
                </table>
            </div>
            <br>
  <footer style="position: absolute; footer: 15px; left: 350px;">
    <p><a>© 2023 Jorge Antony Milian Montalvo. Todos los Derechos Reservados</a>.</p>
  </footer>
        </div>
    </section>

</div>



<?php

    $borrarP = new CitasC();
    $borrarP -> BorrarCitasC();

?>