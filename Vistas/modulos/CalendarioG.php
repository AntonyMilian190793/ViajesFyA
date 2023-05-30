<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Sistemas" && $_SESSION["rol"] != "otrosTrabajadores" && $_SESSION["rol"] != "Logistica") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>


<?php


$pdo = new PDO("mysql:host=localhost; dbname=viajesfya;","root","");
$query=$pdo->prepare("SELECT id, id_padre, id_consulta, nyaP, documento, colegio, comentario, inicio, fin FROM vueloslogistica WHERE id_consulta != 0");
$query->execute();

$resultado=$query->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="content-wrapper">

    <section class="content-header">


    </section>


<section class="content">
    <div class="box">
        <div class="box-body">
            <div id="calendarG"></div>
        </div>
    </div>
</section>

</div>



<div class="modal fade" rol="dialog" id="CalendarioModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                          
                            <input type="hidden" class="form-control input-lg" name="idC" id="idC" readonly>
                        </div>  

                        <div class="form-group">
                            <h2>Evento del trabajador:</h2>
                            <input type="text" class="form-control input-lg" id="titleC" name="titleC" readonly>
                        </div>  
                        
                        <div class="form-group">
                            <h2>Colegio y/o Descripción:</h2>
                            <input type="text" class="form-control input-lg" id="colegioC" name="colegioC" value="" readonly>
                        </div> 

                        <div class="form-group">
                            <h2>Fecha Inicio:</h2>
                            <input type="text" class="form-control input-lg" id="horaS"  name="horaS" value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Fecha Fin:</h2>
                            <input type="text" class="form-control input-lg" id="horaF"  name="horaF" value="" readonly>
                        </div>


                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" id="description" name="description" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="content-wrapper">
<section class="content">
    <div class="box">
        <div class="box-body">
            <div>
                <legend>Leyenda de colores de las áreas</legend>
                <div class="box-body">
                <table class="table -table-bordered table-hover table-striped DTTT">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Área</th>
                            <th>Color</th>
                        </tr>
                        <tr bgcolor="#CD5C5C">
                            <td>1</td>
                            <td>Contabilidad</td>
                            <td>IndianRed</td>
                        </tr>
                        <tr  bgcolor="#FF6347">
                            <td>2</td>
                            <td>Comunicación e Incidencia</td>
                            <td>Tomato</td>
                        </tr>
                        <tr  bgcolor="#9ACD32">
                            <td>3</td>
                            <td>Identidad y Misión</td>
                            <td>YellowGreen</td>
                        </tr>
                        <tr  bgcolor="#FFBF65">
                            <td>4</td>
                            <td>Directivos</td>
                            <td>Amarillo-Cian</td>
                        </tr>
                        <tr  bgcolor="#87CEEB">
                            <td>5</td>
                            <td>EBA</td>
                            <td>Sky-Blue</td>
                        </tr>
                        <tr  bgcolor="#6C88C4">
                            <td>6</td>
                            <td>EBR Urbano</td>
                            <td>Azul-Turquesa</td>
                        </tr>
                        <tr  bgcolor="#6A5ACD">
                            <td>7</td>
                            <td>EBR Rural</td>
                            <td>Slateblue</td>
                        </tr>
                        <tr  bgcolor="#C05780">
                            <td>8</td>
                            <td>EPTT</td>
                            <td>Rosa</td>
                        </tr>
                        <tr  bgcolor="#00B0BA">
                            <td>9</td>
                            <td>FyA Digital</td>
                            <td>Turquesa</td>
                        </tr>
                        <tr  bgcolor="#B196C1">
                            <td>10</td>
                            <td>Legal</td>
                            <td>Morado-Magenta</td>
                        </tr>
                        <tr  bgcolor="#57838D">
                            <td>11</td>
                            <td>Logística</td>
                            <td>Verde-Musgo</td>
                        </tr>
                        <tr  bgcolor="#BDB76B">
                            <td>12</td>
                            <td>Proyectos</td>
                            <td>DarkKhaki</td>
                        </tr>
                        <tr  bgcolor="#B22222">
                            <td>13</td>
                            <td>Recaudo y Voluntariado</td>
                            <td>Firebrick</td>
                        </tr>
                        <tr  bgcolor="#6B8E23">
                            <td>14</td>
                            <td>Vacaciones</td>
                            <td>OliveDrab</td>
                        </tr>
                        <tr  bgcolor="#4682B4">
                            <td>15</td>
                            <td>Sistemas</td>
                            <td>SteelBlue</td>
                        </tr>
                        <tr  bgcolor="#F0E68C">
                            <td>14</td>
                            <td>Gestión</td>
                            <td>Khaki</td>
                        </tr>
                    </thead>
                    <tbody>
                    </div>

            </div>
        </div>
    </div>
</section>

</div> -->

<!-- <legend>Leyenda de áreas</legend>
                <div style="display: inline-block; margin-top: 50px;">Contabilidad<span><input type="color" value="#CD5C5C"></span> </div>
                <div style="display: inline-block; margin-top: 50px;">Comunicación e Incidencia<span><input type="color" value="#FF6347"></span> </div>
                <div style="display: inline-block; margin-top: 50px;">Identidad y Misión<span><input type="color" value="#9ACD32"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Directivos<span><input type="color" value="#FFBF65"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBA<span><input type="color" value="#87CEEB"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBR Urbano<span><input type="color" value="#6C88C4"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EBR Rural<span><input type="color" value="#c3dff9"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">EPTT<span><input type="color" value="#C05780"></span> </div>
                <hr>
                <div style="display: inline-block; margin-top: 50px; ">FyA Digital<span><input type="color" value="#00B0BA"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Legal<span><input type="color" value="#B196C1"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Logística<span><input type="color" value="#57838D"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Proyectos<span><input type="color" value="#BDB76B"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Recaudo y Voluntariado<span><input type="color" value="#6A5ACD"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Recursos Humanos<span><input type="color" value="#6B8E23"></span> </div>
                <div style="display: inline-block; margin-top: 50px; ">Sistemas<span><input type="color" value="#4682B4"></span> </div> -->