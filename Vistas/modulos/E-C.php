<?php

if ($_SESSION["rol"] != "Otros") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Editar Consultas</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <form method="post">

                <?php

                    $editarC = new ConsultasC();
                    $editarC -> EditarConsultasC();

                    $editarC -> ActualizarConsultaC();

                ?>

                </form>
            </div>
        </div>
    </section>
</div>