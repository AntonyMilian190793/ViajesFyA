
<?php

$mysqli = new mysqli("localhost", "root", "", "viajesfya");
$salida = "";
$query = "SELECT * FROM vueloslogistica ORDER BY id";

if(isset($_POST['consulta'])){
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT id ,nyaP, documento, colegio, inicio, fin FROM vueloslogistica WHERE nyaP LIKE '%" . $q . "%' OR nyaP LIKE '%" . $q . "%' 
    OR documento LIKE '%" . $q . "%'";
}

    $resultado = $mysqli->query($query);

    if($resultado->num_rows > 0){

        $salida.="<table class='tabla_datos table -table-bordered table-hover table-striped DT'>
        <thead>
                <tr>

                </tr>
                </thead>
                <tbody>";

    
    while($fila = $resultado->fetch_assoc()){
        $salida.= "<tr>
        <td>". $fila['id']. "</td>
        <td>". $fila['nyaP']. "</td>
        <td>". $fila['documento']. "</td>
        <td>". $fila['colegio']."</td>
        <td>". $fila['inicio']."</td>
        <td>". $fila['fin']."</td>
        </tr>";
        }

    $salida.="</tbody></table>";

    }else{

        $salida.="No existen datos...";
    }

    echo $salida;
    $mysqli->close();




?>