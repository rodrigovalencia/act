<?php

use App\EstadoActivo;
use Illuminate\Database\Seeder;

class EstadoActivoSeeder extends Seeder
{
<<<<<<< HEAD
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
=======
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
>>>>>>> JNunez
		EstadoActivo::truncate();

		//FALTA DEFINIR EL ID DE CODELCO DE TODOS LOS ESTADOS DE ACTIVOS

<<<<<<< HEAD

		//Solicitado a don Patricio ACT

=======
>>>>>>> JNunez
		EstadoActivo::create([
			'nombre'=>'ALMACENADO BODEGA',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'BACKUP',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'COMODATO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'DE BAJA',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'DISPONIBLE',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'EN CUSTODIA',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'ENAJENADO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'GARANTIA',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'INSTALADO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'PARTES Y PIEZAS',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'PERDIDO / ROBADO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'PLANIFICADO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'REASIGNADO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'REPARACION',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'SIN SERVICIO',
			'idCodelco'=>0,
		]);

		EstadoActivo::create([
			'nombre'=>'VENDIDO',
			'idCodelco'=>0,
		]);
<<<<<<< HEAD
	}
}
=======

    }
}
>>>>>>> JNunez
