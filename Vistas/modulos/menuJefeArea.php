<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <ul class="sidebar-menu">
      <li>
        <a href="http://localhost/ViajesFyA/inicio">
          <i class="fa fa-home"></i>
          <span>Inicio</span>
        </a>
      </li>


      <li>
        <a href="http://localhost/ViajesFyA/Ver-areas">
        <i class="fa fa-university" aria-hidden="true"></i>
          <span>Ver Áreas</span>
        </a>
      </li>

      <li>
        <?php
        
          echo '<a href="http://localhost/ViajesFyA/historial/'.$_SESSION["id"].'">';

        ?>
          <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
          <span>Historial</span>
        </a>
      </li>

            <li>
        <?php
        
          echo '<a href="http://localhost/ViajesFyA/Vuelos/'.$_SESSION["id"].'">';

        ?>
        
          <i class="fa fa-plane" aria-hidden="true"></i>
          <span>Viajes</span>
        </a>
      </li>

    </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>