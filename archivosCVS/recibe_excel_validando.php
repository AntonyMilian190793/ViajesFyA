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
       
        $idconsulta           = !empty($datos[0])  ? ($datos[0]) : '';
		$apellido             = !empty($datos[1])  ? ($datos[1]) : '';
        $nombre               = !empty($datos[2])  ? ($datos[2]) : '';
        $documento            = !empty($datos[3])  ? ($datos[3]) : '';
		$usuario              = !empty($datos[4])  ? ($datos[4]) : '';
        $sexo                 = !empty($datos[5])  ? ($datos[5]) : '';
        $clave                = !empty($datos[6])  ? ($datos[6]) : '';
		$rol                  = !empty($datos[7])  ? ($datos[7]) : '';
       
if( !empty($documento) ){
    $checkemail_duplicidad = ("SELECT documento FROM otrostrabajadores WHERE documento='".($documento)."' ");
            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO otrostrabajadores(
    id_consulta,
    apellido, 
    nombre,
    documento,
    usuario,
    sexo,
    clave,
    rol
) VALUES(
    '$idconsulta',
    '$apellido',
    '$nombre',
    '$documento',
    '$usuario',
    '$sexo',
    '$clave',
    '$rol'
)";
mysqli_query($con, $insertarData);
        
} 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updateData =  ("UPDATE otrostrabajadores SET 
        apellido='" .$nombre. "',
        nombre='" .$nombre. "',
        documento='" .$nombre. "',
        usuario='" .$nombre. "',
        sexo='" .$nombre. "',
        clave='" .$nombre. "',
        rol='" .$nombre. "',
        WHERE documento='".$documento."'
    ");
    $result_update = mysqli_query($con, $updateData);
    } 
  }

 $i++;
}

?>

<a href="http://localhost/ViajesFyA/otrosTrabajadores">Archivo subido con éxito</a>