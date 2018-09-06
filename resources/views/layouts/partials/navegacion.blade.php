<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="{{ route('index') }}" class="site_title">
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
				<h3>General</h3>
				<ul class="nav side-menu">
					<li>
						<a>
							<i class="fa fa-dashboard"></i>
							Administracion
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu">
							<li>
								<a href="{{ route('cargarSati') }}">Cargar SATI</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ route('index') }}">
							<i class="fa fa-home"></i>
							Inicio
						</a>
					</li>
				</ul>
			</div>
		</div>
	<!-- /sidebar menu -->

	</div>
</div>