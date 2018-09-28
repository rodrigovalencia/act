<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="{{ route('dashboard.index') }}" class="site_title">
				<i class="fa fa-paw"></i>
				<span>ACT - Sis Ticket</span>
			</a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				<img src="{{ Storage::url('logo/ACT.png') }}" alt="..." class="img-circle profile_img" style="padding: 18px 0px">
			</div>
			<div class="profile_info">
				<span>Bienvenido,</span>
				<h2>Perfil ( Rol )</h2>
			</div>
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

			<div class="menu_section">
				<h3>Inicio</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('dashboard.index') }}">
							<i class="fa fa-home"></i>
							DashBoard
						</a>
					</li>
					<li>
						<a href="{{ route('dashboard.inventario') }}">
							<i class="fa fa-home"></i>
							Inventario
						</a>
					</li>
				</ul>
			</div>
			{{-- <div class="menu_section">
				<h3>Sistema de Tickets</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Crear Ticket
						</a>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Visualizar Ticket
						</a>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Asignación Ticket
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Mantenciones</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Mantenciones Pendientes
						</a>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Cronograma
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Reparaciones</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Reparaciones Pendientes
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Programación</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Programación de Activos
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Instalaciones</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Instación
						</a>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Desinstalación
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Radio Frecuencia</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Análisis de Cobertura
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Control de Inventario</h3>
				<ul class="nav side-menu">
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Alta y Baja de Activo
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Alta</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Baja</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Asignación de Activo
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Reasignación</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Asignación</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Ubicación de Activo
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Reubicación</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Ubicación</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Gestión de Repuestos
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Capacitaciones</h3>
				<ul class="nav side-menu">
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Crear
						</a>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Listar
						</a>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Documentos</h3>
				<ul class="nav side-menu">
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Tickets
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. Recepción</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. Entrega</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Activo
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. Asignación</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. DesAsignación</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. Robo/Perdida</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. Baja</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Form. Asig. Consumibles</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Programación
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Autorización de Programación</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Cambios de Perfil</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Repetidores</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Base de Conocimiento
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Manuales de Componentes</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Manual de Activo</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Area -> GeoReferencia</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Manuales de Consumibles</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Rúbrica de Consultas</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Propiedad
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Facturas</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Arriendos</a>
							</li>
						</ul>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Comodatos</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							SW
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Manuales</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Licencias</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Capacitación
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Registros</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Certificaciones
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Monitores</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="menu_section">
				<h3>Reportes</h3>
				<ul class="nav side-menu">
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Generales
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Tickets</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Usuarios Asignados</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Vehículos Asignados</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Terminales</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Carros de Amplificación</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Cables Radiantes</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Repuestos</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Específicos
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Persona Específica</a>
							</li>
						</ul>
					</li>
				</ul>
			</div> --}}
			<div class="menu_section">
				<h3>Administración</h3>
				<ul class="nav side-menu">
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Activos
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('radioTrabajo.create') }}">Radios de Trabajo</a>
							</li>
						</ul>
					</li>
					{{-- <li>
						<a>
							<i class="fa fa-dashboard"></i>
							Perfil de Programación
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Tipo Programación</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Perfil</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Zona</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Canal</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Area de canal</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Componente
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Categoría</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Fabricante</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Tipos</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Estados</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Capacitación
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Categoría</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Usuarios
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Listar</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Roles</a>
							</li>
							<li>
								<a href="{{ route('cargarSati') }}">Tipos</a>
							</li>
						</ul>
					</li> --}}
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Cargas Masivas
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('csv.sati.cargarSati') }}">SATI</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	<!-- /sidebar menu -->

	</div>
</div>