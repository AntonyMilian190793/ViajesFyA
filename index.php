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

require_once "Controladores/administracionC.php";
require_once "Modelos/administracionM.php";

require_once "Controladores/citasC.php";
require_once "Modelos/citasM.php";

require_once "Controladores/sistemasC.php";
require_once "Modelos/sistemasM.php";

require_once "Controladores/inicioC.php";
require_once "Modelos/inicioM.php";

require_once "Controladores/colaboradorC.php";
require_once "Modelos/colaboradorM.php";

require_once "Controladores/colegiosC.php";
require_once "Modelos/colegiosM.php";

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();

?>