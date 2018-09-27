<?php

use App\Area;
use App\Ubicacion;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Area::truncate();

		$idChuqui = Ubicacion::where('nombre','División Chuquicamata')->value('id');

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Administración General'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'BLOQ'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'BLOQ_Proyectos y Estudios VP'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Control P1 Rt.'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Dirección Superior'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Ex- Proyecto Gaby'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Ex-Gerencia de Operaciones'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Filiales'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Concentradora'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Administración'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Extracción y Lixiviación'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Mantención'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Mantenimiento y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Proyectos'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Recursos Humanos'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Recursos Mineros'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Seguridad y Salud Ocupaciona'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Servicios y Suministro'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia de Sustentab y Asuntos Externos'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Desarrollo Minería Subterránea'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Fundición'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia General'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Mantenimiento, Ing. y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Mina'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'GERENCIA OPERACIONES'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Recursos Mineros y Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Refinería'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Seguridad y Salud Ocupacional'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'Gerencia Sustentabilidad y Asuntos Exter'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'VP de Administración y Finanzas'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'VP de Recursos Humanos'
		]);

		Area::create([
			'Ubicacion_id' => $idChuqui,
			'nombre' => 'VP Recursos Mineros y Desarrollo'
		]);


		$idGabi = Ubicacion::where('nombre','División Gabriela Mistral')->value('id');

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Administración General'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'BLOQ'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'BLOQ_Proyectos y Estudios VP'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Ex- Proyecto Gaby'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Administración'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Extracción y Lixiviación'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Mantención'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Mantenimiento y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Producción'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Proyectos'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia de Recursos Mineros'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia Mantenimiento, Ing. y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia Operaciones'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Gerencia Recursos Mineros y Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'GRMD'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'Subgerencia General de Operaciones'
		]);

		Area::create([
			'Ubicacion_id' => $idGabi,
			'nombre' => 'VP de Administración y Finanzas'
		]);


		$idDMH = Ubicacion::where('nombre','División Ministro Hales')->value('id');

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Administración General'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'BLOQ'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Dirección Superior'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Ger. Servicios y Suministros'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de Administración'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de Proyectos'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de Recursos Mineros'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de Recursos Mineros y Desarroll'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de RRHH'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de Seguridad y Salud Ocupaciona'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia de Sustentabilidad y AAEE'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia General'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia Mantenimiento, Ing. y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia Mina'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia Operaciones'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia Planta'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia Recursos Mineros y Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'Gerencia Seguridad y Salud Ocupacional'
		]);

		Area::create([
			'Ubicacion_id' => $idDMH,
			'nombre' => 'VP de Administración y Finanzas'
		]);


		$idRT = Ubicacion::where('nombre','División Radomiro Tomic')->value('id');

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'BLOQ'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'BLOQ_Proyectos y Estudios VP'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Control P1 Rt.'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Dirección Superior'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Concentradora'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Administración'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Mantenimiento y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Producción'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Proyecto'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Proyectos'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Recursos Humanos'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Recursos Mineros'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Seguridad y Salud Ocupaciona'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia de Servicios y Suministro'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia General'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Mantenimiento, Ing. y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Mina'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Operaciones'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Recursos Mineros y Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Seguridad y Salud Ocupacional'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Gerencia Sustentabilidad y Asuntos Exter'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'Subgerencia General de Operaciones'
		]);

		Area::create([
			'Ubicacion_id' => $idRT,
			'nombre' => 'VP de Administración y Finanzas'
		]);

		$idVP = Ubicacion::where('nombre','Vicepresidencia de Proyectos')->value('id');

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'BLOQ'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'BLOQ_Proyectos y Estudios VP'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'BOOLQ CeCos VP antiguos'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Ex- Proyecto Gaby'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Filiales'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gcia de Recursos Humanos'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gcia. de Administración y Servicios Proy'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gcia. de Ingeniería y Constructibilidad'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gcia. de Seguridad y Salul Ocupacional'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gcia. de Sustentabilidad y Asuntos Exter'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Ger. Servicios y Suministros'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Ger.Riesgo,Ambiente y Calidad'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia de Ingeniería'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia de Proyecto'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia de Proyectos'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia de Proyectos y Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia Desarrollo Minería Subterránea'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia General'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia Mantenimiento, Ing. y Servicios'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia Mina'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'GERENCIA OPERACIONES'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'Gerencia Recursos Mineros y Desarrollo'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => $idVP
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'VP de Administración y Finanzas'
		]);

		Area::create([
			'Ubicacion_id' => $idVP,
			'nombre' => 'VP de Recursos Humanos'
		]);
	}
}
