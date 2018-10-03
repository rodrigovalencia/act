<?php

use App\GrupoEspecialista;
use App\GrupoUsuario;
use Illuminate\Database\Seeder;

class GrupoEspecialistaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		GrupoEspecialista::truncate();

		$grupoID = GrupoUsuario::where('nombre', 'Redes')->first()->id;
		GrupoEspecialista::create([
			'nombre' => 'Nivel 1',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Nivel 2',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Administracion',
			'GrupoUsuario_id' => $grupoID,
		]);

		$grupoID = GrupoUsuario::where('nombre', 'RadioCompunicaciones')->first()->id;
		GrupoEspecialista::create([
			'nombre' => 'Tecnico Especialista',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Administracion',
			'GrupoUsuario_id' => $grupoID,
		]);

		$grupoID = GrupoUsuario::where('nombre', 'Impresion')->first()->id;
		GrupoEspecialista::create([
			'nombre' => 'Tecnico',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Administracion',
			'GrupoUsuario_id' => $grupoID,
		]);

		$grupoID = GrupoUsuario::where('nombre', 'Soporte')->first()->id;
		GrupoEspecialista::create([
			'nombre' => 'Tecnico',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Administracion',
			'GrupoUsuario_id' => $grupoID,
		]);

		$grupoID = GrupoUsuario::where('nombre', 'CCTV')->first()->id;
		GrupoEspecialista::create([
			'nombre' => 'Nivel 1',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Nivel 2',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Nivel 3',
			'GrupoUsuario_id' => $grupoID,
		]);

		$grupoID = GrupoUsuario::where('nombre', 'Mesa de Ayuda')->first()->id;
		GrupoEspecialista::create([
			'nombre' => 'Tecnico',
			'GrupoUsuario_id' => $grupoID,
		]);
		GrupoEspecialista::create([
			'nombre' => 'Administracion',
			'GrupoUsuario_id' => $grupoID,
		]);
	}
}
