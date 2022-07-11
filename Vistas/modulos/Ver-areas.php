<?php

if ($_SESSION["rol"] != "Administracion") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Elegir una Área:</h1>
    </section>

    <section class="content">
        <div class="box">

            <div class="box-body">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>EBR</h3>
                            <a href="Padre" style="color:black;"><p>Ernesto Cavassa</p></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

</div>
