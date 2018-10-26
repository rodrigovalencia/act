<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call([
// <<<<<<<<<<                 >>>>>>>>>>
// <<<<<<<<<< FALTA POR HACER >>>>>>>>>>
// <<<<<<<<<<                 >>>>>>>>>>
			// Equipo_Seeder::class,
			// Falta definir las ubicaciones de los Equipos
			// como se hizo en las bases

			// CategoriaSeeder::class,
			// Se espera un FeedBack de Prevencionista (Mañana Miercoles)

			// EstadoTicketSeeder::class,
			// Refinar cruzando con funcionalidades

			// EstadoActivoSeeder::class,
			// Falta definir el codigo de codelco en cada estado
			// Actualmente definidos en 0 (Cero)

// <<<<<<<<<<         >>>>>>>>>>
// <<<<<<<<<< SEEDERS >>>>>>>>>>
// <<<<<<<<<<         >>>>>>>>>>

			// // -- BASE --
			// // Se dispone de:
			// // - 'CCTV'
			// // - 'Computador'
			// // - 'DispRed'
			// // - 'RadioComercial'
			// // - 'RadioTrabajo'
			// // - 'Impresora'
			// // - 'Celular'
			TipoActivoSeeder::class,
			// //Solo de RadioTrabajo
			// FabricanteSeeder::class,
			// // --
			// SistemaSeeder::class,
			// ExpReg_RTSeeder::class,
			// TipoModeloSeeder::class,
			// // Solo fabricante MOTOROLA
			// ModeloRadioSeeder::class,
			// // --
			// // Solo CODELCO NORTE
			FaenaSeeder::class,
			UbicacionSeeder::class,
			AreaSeeder::class,
			// // --
			// // Hay algunas empresas que no poseen rut
			EmpresaSeeder::class,
			// Contrato_Seeder::class,
			// ContratoInactivo_Seeder::class,
			// // --
			// TipoContrato_Seeder::class,
			// Estado_Seeder::class,
			// // --
			// TipoBase_Seeder::class,
			// Base_Seeder::class,
			// CatEquipo_Seeder::class,
			// TipoEquipo_Seeder::class,
			// // ->>>> TRABAJARLO
			// Equipo_Seeder::class,

			// // -- PROCEDIMIENTOS --
			// TipoServicioSeeder::class,

			// // -- GESTION DEL SW --
			// TipoKeySeeder::class,
			// TipoLicenciaSeeder::class,

			// // -- USUARIOS --
			// RolSeeder::class,
			// GrupoUsuarioSeeder::class,
			// GrupoEspecialistaSeeder::class,

			// // -- CAPACITACIONES --
			// // ->>>> TRABAJARLO
			// CategoriaSeeder::class,

			// // -- TICKETS --
			// // // ->>>> TRABAJARLO
			// EstadoTicketSeeder::class,

			// // -- ACTIVOS --
			// // ->>>> TRABAJARLO
			EstadoActivoSeeder::class,

			// // -- CATEGORIA TICKETS --
			// AdmN1_Seeder::class,
			// AdmN2_Seeder::class,
			// AdmN3_Seeder::class,
			// AdmN4_Seeder::class,
			// Administrativo_Seeder::class,
			// // --
			// CatN1_Seeder::class,
			// CatN2_Seeder::class,
			// CatN3_Seeder::class,
			// CatN4_Seeder::class,
			// CatN5_Seeder::class,
			// Centinela_Seeder::class,
			// // --
			CatCodelco_Seeder::class,
			Codelco_Seeder::class,


// <<<<<<<<<<           >>>>>>>>>>
// <<<<<<<<<< FACTORIES >>>>>>>>>>
// <<<<<<<<<<           >>>>>>>>>>

			// -- BASE --
			// Modelo
			// SATI
			// DocComodato
			// ContratoActualizacion (No hay actualizaciones)
			// -- PROCEDIMIENTO --
			// Procedimiento
			// -- GESTION DEL SW --
			// ActivoComputo
			// Licencia
			// Key
			// InstSW
			// SW

			// -- USUARIOS --
			// Usuario

			// -- CAPACITACIONES --
			// Capacitacion
			// Capacitacion_Persona
			// Persona

			// -- TICKETS --
			// Ticket_EstadoTicket
			// Contacto
			// Ticket

			// -- ACTIVOS --
			// Activo
			// Activo_EstadoActivo
			// Activo_Empresa
			// --
			// CCTV
			// Computador
			// DispRed
			// RadioComercial
			// RadioTrabajo
			// Impresora
			// Monitor
			// Celular
			// CableRadiante
			// CarroAmplificacion
			// Repetidor

			// -- PLANES DE MANTENIMIENTO --
			// ActualizacionPlan
			// PlanMantenimiento
			// Activo_PlanMantenimiento
			
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

			// FakerSeeder::class,




// <<<<<<<<<<               >>>>>>>>>>
// <<<<<<<<<< AQUI QUEDAMOS >>>>>>>>>>
// <<<<<<<<<<               >>>>>>>>>>

			// ******
			// -- COMPONENTES --
			// Componente
			// CategoriaComponente
			// TipoComponente
			// Componente_EstadoComponente
			// EstadoComponente
			// FabricanteComponente
			// FabricanteComponente_TipoComponente

			// ******
			// -- CONSUMIBLES --
			// TipoConsumible
			// ModeloConsumible
			// Consumible
			// Consumible_Activo
		]);
}
}
