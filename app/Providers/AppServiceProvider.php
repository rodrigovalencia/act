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
			'Programacion'	=>	'App\Programacion',
			'Configuracion'	=>	'App\Configuracion',
			'Reparacion'	=>	'App\Reparacion',
			'Mantenimiento'	=>	'App\Mantenimiento',
		]);

		Relation::morphMap([
			'CCTV'					=>	'App\CCTV',
			'Computador'			=>	'App\Computador',
			'DispRed'				=>	'App\DispRed',
			'RadioComercial'		=>	'App\RadioComercial',
			'RadioTrabajo'			=>	'App\RadioTrabajo',
			'Impresora'				=>	'App\Impresora',
			'Monitor'				=>	'App\Monitor',
			'Celular'				=>	'App\Celular',
			'CableRadiante'			=>	'App\CableRadiante',
			'CarroAmplificacion'	=>	'App\CarroAmplificacion',
			'Repetidor'				=>	'App\Repetidor',
		]);

		Relation::morphMap([
			'Equipo'	=>	'App\Equipo',
			'Base'		=>	'App\Base',
		]);

		Relation::morphMap([
			'Ubicacion'	=>	'App\Ubicacion',
			'Faena'		=>	'App\Faena',
		]);

		Relation::morphMap([
			'Computador'	=>	'App\Computador',
			'DispRed'		=>	'App\DispRed',
		]);

		Relation::morphMap([
			'ConfSW'			=>	'App\ConfSW',
			'ConfEquipo'		=>	'App\ConfEquipo',
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
