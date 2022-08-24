<?php

if ($_SESSION["rol"] != "otrosTrabajadores") {

    echo '<script>
        
        window.location = inicio;
        </script>';

    return;
}

?>

<div class="content-wrapper">

    <section class="content">

        <div class="box">

            <div class="box-body">

            <?php

            $editarPerfil = new ColaboradorC();
            $editarPerfil -> EditarPerfilColaboradorC();
            $editarPerfil -> ActualizarPerfilColaboradorC();

            ?>


    
            </div>
        </div>
    </section>

</div>