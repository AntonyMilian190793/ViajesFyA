<?php

if ($_SESSION["rol"] != "otrosTrabajadores") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <?php

        $columna = "id";
        $valor = substr($_GET["url"], 8);

        $resultado = OtrosTC::OtroTC($columna, $valor);

        if($resultado["sexo"] == "Femenino"){
            echo '<h1>Trabajadora: '.$resultado["nombre"].' '.$resultado["apellido"].'</h1>';
        }else{
            echo '<h1>Trabajador: '.$resultado["nombre"].' '.$resultado["apellido"].'</h1>';
        }


        $columna = "id";

        $valor = $resultado["id_consulta"];

        $consultorio = ConsultasC::VerConsultasC($columna, $valor);


        echo '        
        <br>
            <h1>Área de : '.$consultorio["nombre"].'</h1>';
        ?>

        
        

    </section>


    <section class="content">
        <div class="box">
            <div class="box-body">
                <div id="calendar"></div>
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
                            <h2>Nombre de Trabajador:</h2>
                            <input type="text" class="form-control input-lg" id="titleC" name="titleC" readonly>
                        </div>  
                        
                        <div class="form-group">
                            <h2>Colegio:</h2>
                            <input type="text" class="form-control input-lg" id="colegioC" name="colegioC" value="" readonly>
                        </div> 

                        <div class="form-group">
                            <h2>Hora Inicio:</h2>
                            <input type="text" class="form-control input-lg" id="horaS"  name="horaS" value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Hora Fin:</h2>
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