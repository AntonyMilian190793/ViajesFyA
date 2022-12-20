<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      
    <div class="box">

    <?php

      $inicio = new InicioC();
      $inicio -> MostrarInicioC();

      if($_SESSION['rol'] == "Sistemas"){
        
        echo '
        <div class="box-footer">
          <a href="inicio-editar">
            <button class="btn btn-success btn-lg">Editar</button>
          </a>
        </div>';

      }
    
    ?>

        
    <br>
  <footer style="position: absolute; footer: 15px; left: 550px;">
    <p><a>© 2022 Jorge Antony Milian Montalvo. Todos los Derechos Reservados</a>.</p>
  </footer>
  
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

