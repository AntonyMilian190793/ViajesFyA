<?php

require_once "Controladores/plantillaC.php";

require_once "Controladores/otrosC.php";
require_once "Modelos/otrosM.php";

require_once "Controladores/consultasC.php";
require_once "Modelos/consultasM.php";

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();