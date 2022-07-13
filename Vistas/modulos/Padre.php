<?php

if ($_SESSION["rol"] != "Administracion") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <?php

        $columna = "id";
        $valor = substr($_GET["url"], 6);

        $resultado = PadresC::PadreC($columna, $valor);

        if($resultado["sexo"] == "Femenino"){
            echo '<h1>Trabajadora: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';
        }else{
            echo '<h1>Trabajador: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';
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

<div class="modal fade" role="dialog" id="CitaModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombre del Trabajador:</h2>
                            <input type="text" class="form-control input-lg" name="nyaC" value="" readonly>
                            <input type="hidden" name="Did" value="" id="">
                            <input type="hidden" name="Cid" value="" id="">

                        </div>

                        <div class="form-group">
                            <h2>Documento:</h2>
                            <input type="text" class="form-control input-lg" name="documentoC" value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Fecha:</h2>
                            <input type="text" class="form-control input-lg" name="fechaC" value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Hora:</h2>
                            <input type="text" class="form-control input-lg" name="horaC" value="" readonly>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control input-lg" name="fyhIC" value=""  id="fyhIC" readonly>
                            <input type="hidden" class="form-control input-lg" name="fyhFC" value=""  id="fyhFC" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
