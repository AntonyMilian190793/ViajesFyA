<?php

if ($_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Editar Colegios</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <form method="post">

                <?php

                    $editarC = new ColegiosC();
                    $editarC -> EditarColegiosC();

                    $editarC -> ActualizarColegiosC();

                ?>

                </form>
            </div>
        </div>
    </section>
</div>