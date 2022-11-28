<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica"  && $_SESSION["rol"] !="JefeArea" && $_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">


    </section>


<section class="content">
    <div class="box">
        <div class="box-body">
            <div id="calendar"></div>
        </div>
    </div>
</section>

</div>
