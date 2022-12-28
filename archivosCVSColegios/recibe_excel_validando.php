<?php
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
       
        $nombre                = !empty($datos[0])  ? ($datos[0]) : '';
       
if( !empty($nombre) ){
    $checkemail_duplicidad = ("SELECT nombre FROM colegios WHERE nombre='".($nombre)."' ");
            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO colegios( 
   nombre

) VALUES(
    '$nombre'
)";
mysqli_query($con, $insertarData);
        
} 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updateData =  ("UPDATE colegios SET 
        nombre='" .$nombre. "'
        WHERE nombre='".$nombre."'
    ");
    $result_update = mysqli_query($con, $updateData);
    } 
  }

 $i++;
}

?>

<a href="index.php">Atras</a>