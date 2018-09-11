<?php

namespace App\Providers;

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
