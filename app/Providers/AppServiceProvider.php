<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		/**
		 * Mapeo de relaciones polimorficas
		 */
		Relation::morphMap([
			// SERVICIOS
			'Programacion'       => 'App\Programacion',
			'Configuracion'      => 'App\Configuracion',
			'Reparacion'         => 'App\Reparacion',
			'Mantenimiento'      => 'App\Mantenimiento',
			// ACTIVOS
			'CCTV'               => 'App\CCTV',
			'Computador'         => 'App\Computador',
			'DispRed'            => 'App\DispRed',
			'RadioComercial'     => 'App\RadioComercial',
			'RadioTrabajo'       => 'App\RadioTrabajo',
			'Impresora'          => 'App\Impresora',
			'Monitor'            => 'App\Monitor',
			'Celular'            => 'App\Celular',
			'CableRadiante'      => 'App\CableRadiante',
			'CarroAmplificacion' => 'App\CarroAmplificacion',
			'Repetidor'          => 'App\Repetidor',
			// UBICACION DE RADIO
			'Equipo'             => 'App\Equipo',
			'Base'               => 'App\Base',
			// ACTIVO DE COMPUTO
			// 'Computador'         => 'App\Computador',
			// 'DispRed'            => 'App\DispRed',
			// DOMINIO CONTRATO
			'Ubicacion'          => 'App\Ubicacion',
			'Faena'              => 'App\Faena',
			// CONFIGURACION
			'ConfSW'             => 'App\ConfSW',
			'ConfEquipo'         => 'App\ConfEquipo',
		]);
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
