<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica"  && $_SESSION["rol"] !="JefeArea" && $_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de otros Trabajadores</h1>
    </section>


        

    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="crow g-3">
                    <input type="text" class="form-control" name="caja_busqueda" id="caja_busqueda" placeholder="Búsqueda">
            </div>
            </div>

            <div id="datos">

            </div>
            <div class="box-body">
                <table class="table -table-bordered table-hover table-striped">
                    <?php

                $mysqli = new mysqli("localhost", "root", "", "viajesfya");
                $salida = "";
                $query = "SELECT * FROM vueloslogistica ORDER BY id";

                if(isset($_POST['consulta'])){
                    $q = $mysqli->real_escape_string($_POST['consulta']);
                    $query = "SELECT id, nyaP, documento, colegio FROM vueloslogistica WHERE nyaP LIKE '%" . $q . "%' OR nyaP LIKE '%" . $q . "%' 
                    OR documento LIKE '%" . $q . "%'";
                }

                    $resultado = $mysqli->query($query);

                    if($resultado->num_rows > 0){

                        $salida.="<table class='tabla_datos'>
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Documento</th>
                                    <th>Colegio</th>
                                </tr>
                                </thead>
                                <tbody>";

                    
                    while($fila = $resultado->fetch_assoc()){
                        $salida.= "<tr>
                        <td>". $fila['id']. "</td>
                        <td>". $fila['nyaP']. "</td>
                        <td>". $fila['documento']. "</td>
                        <td>". $fila['colegio']."</td>
                        </tr>";
                        }

                    $salida.="</tbody></table>";

                    }else{

                        $salida.="No hay datos";
                    }

                    echo $salida;
                    $mysqli->close();
                
                
            
            
            ?>

                </table>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="http://localhost/ViajesFyA/Vistas/js/main.js"></script>

</div>

 

            
            </body>
</html>