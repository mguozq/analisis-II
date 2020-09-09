<header class="main-header">

<!-- =========== LOGO DE EMPRESA =========== -->
<a href="inicio" class="logo">
	<!--Logo mini -->
	<span class="logo-mini"><b>MCM</b></span>
	<!--Logo normal -->
	<span class="logo-lg"><b>MACO</b> motocicletas</span>
</a>
<!-- =========== BARRA DE NAVEGACION =========== -->

  <nav class="navbar navbar-static-top" role="navigation">
			<!-- Boton de navegacion -->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed white-background" style="border-radius:99px;height:44px;width:44px;margin-right:3px;margin-top:3px" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa  fa-caret-down"></i>
      </button>
			<a href="inicio">
				<button type="button" class="navbar-toggle white-background" style="border-radius:99px;height:44px;width:44px;margin-right:3px;margin-top:3px">
					<span class="label badge bg-red" style="font-size:11px;position:absolute;margin-top:-11px">2</span>
	        <i class="fa fa-bell"></i>
	      </button>
			</a>
    </div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="hidden-lg hidden-sm">
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  			<ul class="nav navbar-nav">
          <li><a href="crear-venta">Ajustes de perfil</a></li>
          <li><a href="crear-venta">Ajustes del sistema</a></li>
  				<li><a href="crear-venta">Cerrar Sesion</a></li>
  			</ul>
  		</div>
    </div>

		<form class="navbar-form navbar-left hidden-xs hidden-sm" role="search">
			<div class="form-group">
				<input type="text" class="form-control border-circle" title="Ingrese el codigo de un lote de prendas para ver su progreso" id="navbar-search-input" placeholder="Buscar un articulo">
			</div>
		</form>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">

				<!-- Messages: style can be found in dropdown.less-->
 			 <li class="dropdown messages-menu hidden-xs">
 				 <a href="#" class="dropdown-toggle light-white-ico" data-toggle="dropdown" title="Notificacion de lotes">
 					 <i class="fa fa-bell"></i>
 					 <span class="label badge bg-red" style="font-size:11px">2</span>
 				 </a>
 				 <ul class="dropdown-menu z-depth-1-half light-menu-notify">
 					 <li class="header head-notify"><b>Notificaciones</b></li>
 					 <li>
 						 <ul class="menu">

 							 <li>
 								 <a href="#" class="hover-gray item-notify">
 									 <div class="pull-left">
 										 <img src="system/vistas/img/plantilla/wrench.png" class="img-circle" alt="User Image">
 									 </div>
 									 <h4 class="info-item-notify">
 										 Servicio proximo
 										 <small>Click para ver detalles</small>
 									 </h4>
 									 <p>El vehiculo M001DJR tiene servicio en 3 dias</p>
 								 </a>
 							 </li>

							 <li>
 								 <a href="#" class="hover-gray item-notify">
 									 <div class="pull-left">
 										 <img src="system/vistas/img/plantilla/user.jpg" class="img-circle" alt="User Image">
 									 </div>
 									 <h4 class="info-item-notify">
 										 Pago atrasado
 										 <small>Click para ver detalles</small>
 									 </h4>
 									 <p>Fulano Gonzales esta atrazado en sus pagos</p>
 								 </a>
 							 </li>

 						 </ul>
 					 </li>
 					 <li><a class="footer-notify" href="#">Ver todo</a></li>
 				 </ul>
 			 </li>


        <li class="dropdown user user-menu hidden-xs">
          <a href="#" class="dropdown-toggle border-circle away-right white-background" data-toggle="dropdown">
            <img src="system/vistas/img/plantilla/user.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
          </a>

					<ul class="dropdown-menu show-area light-menu z-depth-2" role="menu">

						<li class="user-header user-header-light">
							<img src="system/vistas//img/plantilla/user.jpg" class="pull-left img-circle img-small-circle" alt="User Image">
							<p class="pull-left user-info-light">
								<b><?php echo $_SESSION["nombre"]; ?></b>
								<small class="user-mini-info-light">Menu de opciones</small>
							</p>
						</li>

						<li class="divider"></li>
						<li>
							<a href="#" class="Cfont16 hover-gray" style="width:310px;height:50px;margin-left:10px">
								<div style="margin:2px 0 0 -11px">
									<span class="bg-ico-gray">
										<i class="fa fa-user" style="font-size:21px"></i>
									</span>
									Ver perfil
									<span class="pull-right light-ico"> <i class="fa fa-angle-right"></i></span>
								</div>
							</a>
						</li>

						<li>
							<a href="#" class="Cfont16 hover-gray" style="width:310px;height:50px;margin-left:10px">
								<div style="margin:2px 0 0 -11px">
									<span class="bg-ico-gray">
										<i class="fa fa-info-circle" style="font-size:21px"></i>
									</span>
									Informacion y preguntas
									<span class="pull-right light-ico"> <i class="fa fa-angle-right"></i></span>
								</div>
							</a>
						</li>

						<li>
						 <a href="#" class="Cfont16 light-back hover-gray " style="width:310px;height:95px;margin-left:10px">
							 <div style="margin:10px 0 0 -11px">
								 <span class="bg-ico-gray"><i class="fa fa-gear" style="font-size:21px"></i></span>
  							 <div style="margin-left:45px;margin-top:-41px">
  								 Configuracion
  								 <div class="description-light" style="font-size:12.5px;text-align:justify">
  									 Cambie la configuracion y personalice la<br>
  									 funcionalidad del sistema a la forma en <br>
  									 la que lo concidere mas apropiado.
  								 </div>
  							 </div>
							 </div>
						 </a>
						</li>


						<li>
							<a href="salir" class="Cfont16 hover-gray" style="width:310px;height:50px;margin-left:10px">
							<div style="margin:2px 0 0 -11px">
								<span class="bg-ico-gray"><i class="fa fa-power-off" style="font-size:21px"></i></span>
								Cerrar sesion
							</div>
							</a>
						</li><br>
						<li> <p class="detail">Version 1.0 <br> Laundry &copy 2020. Todos los derechos reservados</p> </li>
					</ul>
        </li>


			</ul>
		</div>


  </nav>

</header>
