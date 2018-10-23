<?php

use App\Activo;
use App\Activo_Empresa;
use App\Area;
use App\CCTV;
use App\Capacitacion;
use App\Categoria;
use App\Celular;
use App\Computador;
use App\DispRed;
use App\DocComodato;
use App\Empresa;
use App\EstadoActivo;
use App\GrupoEspecialista;
use App\Impresora;
use App\Modelo;
use App\Persona;
use App\Procedimiento;
use App\RadioComercial;
use App\RadioTrabajo;
use App\Rol;
use App\SATI;
use App\TipoActivo;
use App\TipoServicio;
use App\TipoUsuario;
use App\Ubicacion;
use App\Usuario;
use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		// // <<<<<<<<<<       >>>>>>>>>>
		// // <<<<<<<<<< BASES >>>>>>>>>>
		// // <<<<<<<<<<       >>>>>>>>>>

		// Modelo::truncate();
		// Procedimiento::truncate();
		// $tipos = TipoActivo::with('fabricantes')->get();
		// $tiposServicio = TipoServicio::all();
		// foreach ($tipos as $tipo) {
		// 	foreach ($tipo->fabricantes as $fabricante) {
		// 		$cant = rand(15, 30);
		// 		echo "---> Creando $cant modelos para ($tipo->nombre, $fabricante->nombre) \n";
		// 		$modelos = factory(Modelo::class,$cant)->create([
		// 			'Fabricante_id' => $fabricante->id,
		// 		]);
		// 		echo "---> Creando procedimientos \n";
		// 		$cont = 0;
		// 		foreach ($modelos as $modelo) {
		// 			foreach ($tiposServicio as $tServ) {
		// 				$cant = rand(0, 2);
		// 				$cont += $cant;
		// 				factory(Procedimiento::class, $cant)->create([
		// 					'TipoServicio_id'=>$tServ->id,
		// 					'Modelo_id'=>$modelo->id,
		// 				]);
		// 			}
		// 		}
		// 		echo "---> Se crearon $cont procedimientos \n";
		// 	}
		// }

		// SATI::truncate();
		// $cant = rand(15000, 22000);
		// echo "---> Creando $cant SATI's \n";
		// factory(SATI::class, $cant)->create();

		// // <<<<<<<<<<          >>>>>>>>>>
		// // <<<<<<<<<< USUARIOS >>>>>>>>>>
		// // <<<<<<<<<<          >>>>>>>>>>

		// $roles       = Rol::all();
		// $ubicaciones = Ubicacion::all();
		// $grupos      = GrupoEspecialista::all();
		// foreach ($roles as $rol) {
		// 	foreach ($ubicaciones as $ubicacion) {
		// 		foreach ($grupos as $grupo) {
		// 			$cant = rand(1, 3);
		// 			echo "---> Creando $cant usuarios para la configuracion ($rol->id,$ubicacion->id,$grupo->id) \n";
		// 			factory(Usuario::class, $cant)->create([
		// 				'Rol_id'               => $rol       -> id,
		// 				'Ubicacion_id'         => $ubicacion -> id,
		// 				'GrupoEspecialista_id' => $grupo     -> id,
		// 			]);
		// 		}
		// 	}
		// }

		// // <<<<<<<<<<                >>>>>>>>>>
		// // <<<<<<<<<< CAPACITACIONES >>>>>>>>>>
		// // <<<<<<<<<<                >>>>>>>>>>

		// Capacitacion::truncate();
		// Persona::truncate();
		// $categorias = Categoria::all();
		// foreach ($categorias as $categoria) {
		// 	$cant = rand(8, 14);
		// 	echo "---> Creando $cant capacitaciones \n";
		// 	$capacitaciones = factory(Capacitacion::class, $cant)->create([
		// 		'Categoria_id' => $categoria->id,
		// 	])->each(function($c){
		// 		$cant = rand(10, 20);
		// 		echo "---> Creando $cant participantes \n";
		// 		$c->personas()->attach(factory(Persona::class, $cant)->create(), ['asiste' => rand(0, 1)]);
		// 	});
		// }

		// // <<<<<<<<<<         >>>>>>>>>>
		// // <<<<<<<<<< ACTIVOS >>>>>>>>>>
		// // <<<<<<<<<<         >>>>>>>>>>

		// Activo::truncate();
		// Activo_Empresa::truncate();

		// $empresas = Empresa::all();
		// $estado = EstadoActivo::where('nombre', 'DISPONIBLE')->first()->id;

		// CCTV::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant CCTV \n";
		// factory(CCTV::class, $cant)->create()->each(function($cctv) use ($empresas, $estado){
		// 	$cctv->activo()->create(['Estado_id'=>$estado]);
		// 	$cctv->activo->propietarios()->attach($empresas->random());
		// });

		// Computador::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant Computador \n";
		// factory(Computador::class, $cant)->create()->each(function($pc) use ($empresas, $estado){
		// 	$pc->activo()->create(['Estado_id'=>$estado]);
		// 	$pc->activo->propietarios()->attach($empresas->random());
		// });

		// DispRed::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant DispRed \n";
		// factory(DispRed::class, $cant)->create()->each(function($dispRed) use ($empresas, $estado){
		// 	$dispRed->activo()->create(['Estado_id'=>$estado]);
		// 	$dispRed->activo->propietarios()->attach($empresas->random());
		// });

		// RadioComercial::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant RadioComercial \n";
		// factory(RadioComercial::class, $cant)->create()->each(function($radio) use ($empresas, $estado){
		// 	$radio->activo()->create(['Estado_id'=>$estado]);
		// 	$radio->activo->propietarios()->attach($empresas->random());
		// });

		// RadioTrabajo::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant RadioTrabajo \n";
		// factory(RadioTrabajo::class, $cant)->create()->each(function($radio) use ($empresas, $estado){
		// 	$radio->activo()->create(['Estado_id'=>$estado]);
		// 	$radio->activo->propietarios()->attach($empresas->random());
		// });

		// Impresora::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant Impresora \n";
		// factory(Impresora::class, $cant)->create()->each(function($imp) use ($empresas, $estado){
		// 	$imp->activo()->create(['Estado_id'=>$estado]);
		// 	$imp->activo->propietarios()->attach($empresas->random());
		// });

		// Celular::truncate();
		// $cant = rand(50, 200);
		// echo "---> Creando $cant Celular \n";
		// factory(Celular::class, $cant)->create()->each(function($cel) use ($empresas, $estado){
		// 	$cel->activo()->create(['Estado_id'=>$estado]);
		// 	$cel->activo->propietarios()->attach($empresas->random());
		// });

		// // <<<<<<<<<<           >>>>>>>>>>
		// // <<<<<<<<<< SERVICIOS >>>>>>>>>>
		// // <<<<<<<<<<           >>>>>>>>>>


		// FALTARIAN TODOS ESTOS...
			
			// -- TICKETS --
			// Ticket_EstadoTicket
			// Contacto
			// Ticket

			


			// ******
			// -- SERVICIOS --
			// Servicio
			// Servicio_Usuario
			// --
			// -- MESA DE AYUDA --
			// MesaAyuda
			// MesaAyuda_Activo
			// -- PROGRAMACION DE RADIOS --
			// Perfil
			// Zona
			// Canal
			// Perfil_Zona_Canal
			// Area_Canal
			// TipoProgramacion
			// Programacion_Activo
			// Programacion_Activo_Canal
			// Programacion
			// -- CONFIGURACION --
			// Configuracion
			// ConfSW
			// ConfSW_ActivoComputo
			// ConfEquipo
			// ConfEquipo_Activo
			// -- REPARACION --
			// Reparacion
			// Reparacion_Activo
			// ResultadoReparacion
			// Reparacion_Activo_Componente
			// -- MANTENCION --
			// Mantencion
			// TipoMantencion
			// ResultadoMantencion
			// Mantencion_Activo
			// Mantencion_Activo_Componente




			// -- GESTION DEL SW --
			// ActivoComputo
			// Licencia
			// Key
			// InstSW
			// SW


			// -- PLANES DE MANTENIMIENTO --
			// ActualizacionPlan
			// PlanMantenimiento
			// Activo_PlanMantenimiento

	}
}