<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="system/vistas/img/plantilla/user.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION["nombre"]; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>En linea</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">PANEL DE NAVEGACION</li>

      <li id="inicio">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>
      <li id="usuarios">
				<a href="usuarios">
					<i class="fa fa-user"></i>
					<span>Usuarios</span>
				</a>
			</li>
      <li  class="treeview" id="taller">
				<a href="#">
					<i class="fa fa-wrench"></i>
					<span>Taller</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
			  </span>
				</a>
				<ul class="treeview-menu" id="menu">
            <li><a href="taller"><i class="fa fa-wrench"></i> Ingreso al Taller</a></li>
            <li><a href="egresotaller"><i class="fa fa-wrench"></i> Egreso del Taller</a></li>
            <li><a href="servicio-taller"><i class="fa fa-wrench"></i> Servicio</a></li>
          </ul>
			</li>

      <li id="stock">
				<a href="stock">
					<i class="fa fa-tags"></i>
					<span>Stock</span>
				</a>
			</li>
      <li id="ventas">
				<a href="ventas">
					<i class="fa fa-shopping-cart"></i>
					<span>Ventas</span>
				</a>
			</li>
      <li id="creditos">
				<a href="creditos">
					<i class="fa fa-file-text"></i>
					<span>Creditos</span>
				</a>
			</li>
      <li id="clientes">
				<a href="clientes">
					<i class="fa fa-users"></i>
					<span>Clientes</span>
				</a>
			</li>
      <li id="proveedores">
				<a href="proveedores">
					<i class="fa fa-truck"></i>
					<span>Proveedores</span>
				</a>
			</li>

      <li id="ejemplos">
				<a href="ejemplos">
					<i class="fa fa-file"></i>
					<span>Ejemplos</span>
				</a>
			</li>



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
