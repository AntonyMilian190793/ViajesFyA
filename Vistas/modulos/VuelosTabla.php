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
                <table class="table -table-bordered table-hover table-striped DTE">
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

                            if($_SESSION["rol"] == "Logistica"){

                            
                            echo '<div class="btn-group">
                                <button class="btn btn-success"><i class="fa fa-pencil"> 
                                Editar</i></button>
                                
                                        <button class="btn btn-danger EliminarVuelo" onclick="mostrar3()" Pid="'.$value["id"].'">
                                        <i class="fa fa-times"> Borrar</i></button>
                                    </div>
                            </td>
                        </tr>';
                        }else if($_SESSION["rol"] == "Sistemas"){
                            echo '<div class="btn-group">
                            <button class="btn btn-success"><i class="fa fa-pencil"> 
                            Editar</i></button>
                            
                                    <button class="btn btn-danger EliminarVuelo" onclick="mostrar2()" Pid="'.$value["id"].'">
                                    <i class="fa fa-times"> Borrar</i></button>
                                </div>
                        </td>
                    </tr>';
                    

                        }else{

                            }
                        }

                        ?>
                    
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