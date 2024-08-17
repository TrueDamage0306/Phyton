<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="#">
			<span class="align-middle">

			Administrador
			</span>
		</a>

		<ul class="sidebar-nav">

			<li class="sidebar-item active">
				<a class="sidebar-link" href="../index.php" id="tablero">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Inicio</span>
				</a>
			</li>

			<li class="sidebar-item active">
				<a class="sidebar-link" href="#">
				<i class="bi bi-people" ></i> <span class="align-middle">Usuarios</span>
				</a>
			</li>
			<li class="sidebar-item active">
				<a class="sidebar-link" href="../entradas/index.php">
				<i class="bi bi-people" ></i> <span class="align-middle">Entradas</span>
				</a>
			</li>
			<li class="sidebar-item active">
				<a class="sidebar-link" href="../estadistica/index.php">
				<i class="bi bi-bar-chart" ></i> <span class="align-middle">Estadisticas</span>
				</a>
			</li>
 
			<li class="sidebar-item active">
				<a class="sidebar-link" href="../../logout.php">
					<i class="align-middle" data-feather=""><img src="../imagenes/iconos/002-cerrar-sesion.png
							" alt="" width="24"></i> <span class="align-middle">Cerrar sesion</span>
				</a>
			</li>
			<br><br>
			<div class="text-center">
				<img src="../assets/img/superpy.webp" alt="" width="50%">
			</div>
		</ul>

	</div>
</nav>

<div class="main">
	<nav class="navbar navbar-expand navbar-light navbar-bg">
		<a class="sidebar-toggle js-sidebar-toggle">
			<i class="hamburger align-self-center"></i>
		</a>

		<div class="navbar-collapse collapse">
		<strong><?php //echo $objLogin->getNivel() ?></strong>
			<h3>Administrador</h3>
			<!--<ul class="navbar-nav navbar-align">
				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					
						class="text-dark">
						
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="../usuarios/index.php"><i class="align-middle me-1"
							data-feather="user"></i> Nuevo Usuario</a>

					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="CerrarSesion.php">Cerrar Sesión</a>
				</div>
				</li>
			</ul>-->
		</div>
	</nav>