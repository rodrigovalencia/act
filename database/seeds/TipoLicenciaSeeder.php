<?php

use App\TipoLicencia;
use Illuminate\Database\Seeder;

class TipoLicenciaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoLicencia::truncate();

		TipoLicencia::create(['nombre'=>'SOFTWARE LIBRE']);
		TipoLicencia::create(['nombre'=>'COPYLEFT']);
		TipoLicencia::create(['nombre'=>'GPL']);
		TipoLicencia::create(['nombre'=>'DEBIAN']);
		TipoLicencia::create(['nombre'=>'OPEN SOURCE']);
		TipoLicencia::create(['nombre'=>'BSD']);
		TipoLicencia::create(['nombre'=>'SOFTWARE CON DOMINIO PUBLICO']);
		TipoLicencia::create(['nombre'=>'SOFTWARE COMERCIAL']);
		TipoLicencia::create(['nombre'=>'TRIAL']);
		TipoLicencia::create(['nombre'=>'CRIPPLEWARE']);
		TipoLicencia::create(['nombre'=>'POSTCAREWARE']);
		TipoLicencia::create(['nombre'=>'DEMO']);
		TipoLicencia::create(['nombre'=>'ABANDONWARE']);
		TipoLicencia::create(['nombre'=>'X.ORG']);
		TipoLicencia::create(['nombre'=>'SOFTWARE PROPIETARIO']);
		TipoLicencia::create(['nombre'=>'ADWARE']);
		TipoLicencia::create(['nombre'=>'DONATIONWARE']);
		TipoLicencia::create(['nombre'=>'CAREWARE']);
	}
}
