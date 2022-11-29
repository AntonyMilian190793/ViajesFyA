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
        <?php
        
          echo '<a href="http://localhost/ViajesFyA/Vuelos/'.$_SESSION["id"].'">';

        ?>
        
          <i class="fa fa-plane" aria-hidden="true"></i>
          <span>Viajes</span>
        </a>
      </li> 

      <!-- <li>
        
          <a href="http://localhost/ViajesFyA/otrosTrabajadores">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Trabajadores</span>
        </a>
      </li> -->


      <li>
        <a href="http://localhost/ViajesFyA/Ver-areas">
        <i class="fa fa-university" aria-hidden="true"></i>
          <span>Ver Áreas</span>
        </a>
      </li>

      <li>
        <a href="http://localhost/ViajesFyA/CalendarioG">
        <i class="fa fa-calendar" aria-hidden="true"></i>
          <span>Calendario Global</span>
        </a>
      </li>

      <li>
        <a href="http://localhost/ViajesFyA/VuelosTabla">
          <i class="fa fa-search" aria-hidden="true"></i>
          <span>Buscar</span>
        </a>
      </li>


    </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>