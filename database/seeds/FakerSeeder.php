<?php

use App\Actividad;
use App\Activo;
use App\ActivoComputo;
use App\ActivoLog;
use App\Activo_Empresa;
use App\Activo_EstadoActivo;
use App\Activo_PlanMantenimiento;
use App\ActualizacionPlan;
use App\AreaCanal;
use App\CCTV;
use App\CableRadiante;
use App\Canal;
use App\Capacitacion;
use App\Capacitacion_Persona;
use App\CarroAmplificacion;
use App\Categoria;
use App\CategoriaComponente;
use App\Celular;
use App\Componente;
use App\Componente_EstadoComponente;
use App\Computador;
use App\ConfEquipo;
use App\ConfEquipo_Activo;
use App\ConfSW;
use App\ConfSW_ActivoComputo;
use App\Configuracion;
use App\Consumible;
use App\Consumible_Activo;
use App\Contacto;
use App\DispRed;
use App\DocComodato;
use App\DominioContrato;
use App\EstadoActivo;
use App\EstadoComponente;
use App\EstadoTicket;
use App\FabricanteComponente;
use App\FabricanteComponente_TipoComponente;
use App\Impresora;
use App\InstSW;
use App\Key;
use App\Licencia;
use App\Mantencion;
use App\Mantencion_Activo;
use App\Mantencion_Activo_Componente;
use App\Modelo;
use App\ModeloConsumible;
use App\ModeloSW;
use App\Monitor;
use App\Perfil;
use App\Perfil_Zona_Canal;
use App\Persona;
use App\PlanMantenimiento;
use App\Procedimiento;
use App\Programacion;
use App\Programacion_Activo;
use App\Programacion_Activo_Canal;
use App\RadioComercial;
use App\RadioTrabajo;
use App\Reparacion;
use App\Reparacion_Activo;
use App\Reparacion_Activo_Componente;
use App\Repetidor;
use App\ResultadoMantencion;
use App\ResultadoReparacion;
use App\Rol;
use App\SW;
use App\SubActividad;
use App\Ticket;
use App\Ticket_EstadoTicket;
use App\TipoComponente;
use App\TipoConsumible;
use App\TipoKey;
use App\TipoLicencia;
use App\TipoMantencion;
use App\TipoProgramacion;
use App\TipoServicio;
use App\TipoUsuario;
use App\URadio;
use App\Usuario;
use App\Zona;
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
		/* Vaciar Tablas de Usuarios */
		Rol::truncate();
		TipoUsuario::truncate();
		Usuario::truncate();

		/* Vaciar Tablas de Consumibles */
		TipoConsumible::truncate();
		ModeloConsumible::truncate();
		Consumible::truncate();

		/* Vaciar Tablas de Componentes */		
		CategoriaComponente::truncate();
		TipoComponente::truncate();
		EstadoComponente::truncate();
		FabricanteComponente::truncate();
		FabricanteComponente_TipoComponente::truncate();
		Componente_EstadoComponente::truncate();
		Componente::truncate();

		/* Vaciar Tablas Plan de Mantenimientos */
		ActualizacionPlan::truncate();
		PlanMantenimiento::truncate();
		Activo_PlanMantenimiento::truncate();

		/* Vaciar Tablas de Capacitaciones */
		Capacitacion::truncate();
		Categoria::truncate();
		Persona::truncate();
		Capacitacion_Persona::truncate();

		/* Vaciar Tablas de Actividades de Apoyo al Proceso */
		Actividad::truncate();
		SubActividad::truncate();
		ActivoLog::truncate();

		/* Vaciar Tablas de Procedimientos */
		TipoServicio::truncate();
		Procedimiento::truncate();

		/* Vaciar Tablas de Activos */
		CCTV::truncate();
		Computador::truncate();
		DispRed::truncate();
		RadioComercial::truncate();
		RadioTrabajo::truncate();
		Impresora::truncate();
		Monitor::truncate();
		Celular::truncate();
		CableRadiante::truncate();
		CarroAmplificacion::truncate();
		Repetidor::truncate();
		Activo_Empresa::truncate();
		EstadoActivo::truncate();
		Activo::truncate();
		Activo_EstadoActivo::truncate();

		/* Vaciar Tablas Base de Activos */
		URadio::truncate();
		DocComodato::truncate();
		Modelo::truncate();
		DominioContrato::truncate();

		/* Vaciar Tablas Base de Activos */
		EstadoTicket::truncate();
		Ticket_EstadoTicket::truncate();
		Contacto::truncate();
		Ticket::truncate();

		/* Vaciar Tablas de Gestion de Software */
		ModeloSW::truncate();
		SW::truncate();
		InstSW::truncate();
		Licencia::truncate();
		TipoLicencia::truncate();
		Key::truncate();
		TipoKey::truncate();
		ActivoComputo::truncate();

		/* Vaciar Tablas de Servicios Mantencion */
		Mantencion::truncate();
		TipoMantencion::truncate();
		ResultadoMantencion::truncate();
		Mantencion_Activo_Componente::truncate();
		Mantencion_Activo::truncate();

		/* Vaciar Tablas de Servicios Reparacion */
		Reparacion::truncate();
		ResultadoReparacion::truncate();
		Reparacion_Activo::truncate();
		Reparacion_Activo_Componente::truncate();

		/* Vaciar Tablas de Servicios Configuracion */
		Configuracion::truncate();
		ConfSW::truncate();
		ConfSW_ActivoComputo::truncate();
		ConfEquipo::truncate();
		ConfEquipo_Activo::truncate();

		/* Vaciar Tablas de Servicios Programacion */
		Programacion::truncate();
		TipoProgramacion::truncate();
		Perfil::truncate();
		Perfil_Zona_Canal::truncate();
		Zona::truncate();
		Programacion_Activo_Canal::truncate();
		Canal::truncate();
		AreaCanal::truncate();
		Programacion_Activo::truncate();

		/* Creacion de Factories para Usuarios */
		factory(Rol::class, 100)->create();
		factory(TipoUsuario::class, 10)->create();
		factory(Usuario::class, 20)->create();
<<<<<<< HEAD

=======
>>>>>>> master
		/* Creacion de Factories para Procedimientos */
		factory(TipoServicio::class, 20)->create();
		factory(Procedimiento::class, 20)->create();

		/* Creacion de Factories para Bases de Activos */
		factory(Modelo::class, 20)->create();
<<<<<<< HEAD
		factory(DocComodato::class, 20)->create();
		factory(DominioContrato::class, 20)->create();	
=======
		
		factory(DominioContrato::class, 20)->create();
>>>>>>> master

		/* Creacion de Factories para Activos */
		// factory(CCTV::class, 20)->create();
		// factory(Computador::class, 20)->create();
		// factory(DispRed::class, 20)->create();
		// factory(RadioComercial::class, 20)->create();
		// factory(RadioTrabajo::class, 20)->create();
		// factory(Impresora::class, 20)->create();
		// factory(Monitor::class, 20)->create();
		// factory(Celular::class, 20)->create();
		// factory(CableRadiante::class, 20)->create();
		// factory(CarroAmplificacion::class, 20)->create();
		// factory(Repetidor::class, 20)->create();

		factory(EstadoActivo::class, 20)->create();
		factory(URadio::class, 20)->create();
		factory(Activo::class, 100)->create();
		factory(Activo_EstadoActivo::class, 20)->create();
		factory(Activo_Empresa::class, 100)->create();

<<<<<<< HEAD
		/* Creacion de Factories para Consumibles */
		factory(TipoConsumible::class, 30)->create();
		factory(ModeloConsumible::class, 40)->create();
		factory(Consumible::class, 100)->create();
		factory(Consumible_Activo::class, 100)->create();

=======
>>>>>>> master
		/* Creacion de Factories para Componentes */
		factory(CategoriaComponente::class, 20)->create();
		factory(TipoComponente::class, 30)->create();
		factory(EstadoComponente::class, 20)->create();
		factory(FabricanteComponente::class, 20)->create();
		factory(FabricanteComponente_TipoComponente::class, 20)->create();
		factory(Componente::class, 20)->create();		
		factory(Componente_EstadoComponente::class, 20)->create();

		/* Creacion de Factories para Planes de Mantenimiento */
		factory(PlanMantenimiento::class, 20)->create();
		factory(ActualizacionPlan::class, 20)->create();
		factory(Activo_PlanMantenimiento::class, 20)->create();

		/* Creacion de Factories para Capacitaciones */
		factory(Categoria::class, 20)->create();
		factory(Persona::class, 20)->create();
		factory(Capacitacion::class, 30)->create();
		factory(Capacitacion_Persona::class, 20)->create();

		/* Creacion de Factories para Actividades de Apoyo al Proceso */
		factory(Actividad::class, 20)->create();
		factory(SubActividad::class, 20)->create();
		factory(ActivoLog::class, 20)->create();

<<<<<<< HEAD
	
=======
		/* Creacion de Factories para Consumibles */
		factory(TipoConsumible::class, 30)->create();
		factory(ModeloConsumible::class, 40)->create();
		factory(Consumible::class, 100)->create();
		factory(Consumible_Activo::class, 100)->create();
>>>>>>> master

		/* Creacion de Factories para Tickets */	
		factory(EstadoTicket::class, 100)->create();
		factory(Contacto::class, 100)->create();
		factory(Ticket::class, 100)->create();
		factory(Ticket_EstadoTicket::class, 100)->create();

		/* Creacion de Factories para Gestion de Software */
		factory(ModeloSW::class, 20)->create();
		factory(SW::class, 20)->create();
		factory(ActivoComputo::class, 20)->create();
		factory(TipoLicencia::class, 20)->create();
		factory(Licencia::class, 20)->create();
		factory(InstSW::class, 20)->create();
		factory(TipoKey::class, 20)->create();
		factory(Key::class, 20)->create();

		/* Creacion de Factories para Mantenciones */
		factory(TipoMantencion::class, 20)->create();
		factory(ResultadoMantencion::class, 20)->create();
		factory(Mantencion::class, 20)->create();
		factory(Mantencion_Activo_Componente::class, 20)->create();
		factory(Mantencion_Activo::class, 20)->create();

		/* Creacion de Factories para Reparaciones */
		factory(ResultadoReparacion::class, 20)->create();
		factory(Reparacion_Activo_Componente::class, 20)->create();
		factory(Reparacion_Activo::class, 20)->create();
		factory(Reparacion::class, 20)->create();

		/* Creacion de Factories para Configuraciones */
		factory(ConfSW::class, 20)->create();		
		factory(ConfEquipo::class, 20)->create();		
		factory(ConfSW_ActivoComputo::class, 20)->create();		
		factory(ConfEquipo_Activo::class, 20)->create();		
		factory(Configuracion::class, 20)->create();	

		/* Creacion de Factories para Programaciones */
		factory(Programacion::class, 20)->create();			
		factory(TipoProgramacion::class, 20)->create();			
		factory(Perfil::class, 20)->create();			
		factory(Zona::class, 20)->create();			
		factory(AreaCanal::class, 20)->create();			
		factory(Canal::class, 20)->create();			
		factory(Perfil_Zona_Canal::class, 20)->create();			
		factory(Programacion_Activo::class, 20)->create();			
<<<<<<< HEAD
		factory(Programacion_Activo_Canal::class, 20)->create();			
=======
		factory(Programacion_Activo_Canal::class, 20)->create();

		factory(DocComodato::class, 20)->create();			
>>>>>>> master
	}
}
