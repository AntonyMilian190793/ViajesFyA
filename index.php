<?php

require_once "Controladores/plantillaC.php";

require_once "Controladores/otrosC.php";
require_once "Modelos/otrosM.php";

require_once "Controladores/consultasC.php";
require_once "Modelos/consultasM.php";

require_once "Controladores/padresC.php";
require_once "Modelos/padresM.php";

require_once "Controladores/otrosTC.php";
require_once "Modelos/otrosTM.php";

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();