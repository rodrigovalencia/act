<?php

use App\Base;
use App\TipoBase;
use App\Ubicacion;
use Illuminate\Database\Seeder;

class Base_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Base::truncate();

		$tipobaseID = TipoBase::where('nombre', 'CONSOLA')->value('id');
		$ubicacionID = Ubicacion::where('nombre', 'División Radomiro Tomic')->first()->id;

		Base::create([
			'direccion' => '3',
			'TipoBase_id' => $tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'MINA',
			'TipoBase_id' => $tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);
		
		Base::create([
			'direccion'=> 'CO2',
			'TipoBase_id' => $tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);
		
		Base::create([
			'direccion'=> 'SULFURO',
			'TipoBase_id' => $tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);
		
		Base::create([
			'direccion'=> 'CO3',
			'TipoBase_id' => $tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);
		
		Base::create([
			'direccion'=> 'PECERA',
			'TipoBase_id' => $tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);
		
		$ubicacionID = Ubicacion::where('nombre', 'División Chuquicamata')->first()->id;

		Base::create([
			'direccion'=>'E4',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=>'F3',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=>'TRANSFERENCIA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=>'PTMP',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'SUB A',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'CONTROL SUR',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'PATIO 7',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'AGUA DULCE',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'PLANTA EW',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=>'EW',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'E4 2',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=> 'CT2 Y CPS',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=>'M1',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$ubicacionID = Ubicacion::where('nombre', 'División Gabriela Mistral')->first()->id;

		Base::create([
			'direccion'=> 'APILADORA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion'=>'PILA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$tipobaseID = TipoBase::where('nombre', 'OFICINA')->value('id');
		$ubicacionID = Ubicacion::where('nombre', 'División Chuquicamata')->first()->id;

		Base::create([
			'direccion' => 'ACT',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'ANALISTA GESTION',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'BODEGA K6',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'BRIGADA EMERGENCIA MINA SUR',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CASA 201',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CASA  C 43',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CHANCADO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CHUQUITA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'COMEDOR HOUSTON',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'COMUNICACIONES',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CONSOLA TRANSFER',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CONTROL CAEX',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'DEM',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'DISPATCH',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'E4 2',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'ELECTRICOS',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'ENFERMERIA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'GEMS MSUR',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'HORNO FLASH',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'HOUSTON',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'INSTRUCTORES CAEX',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'JEFE TURNO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'MANTENCION',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'MECANICOS DE BANCO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'MOFITO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'MUESTRERA  PTMP KM 6',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'OF MSUR',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'OFICINA CHANCADO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'PAÑOL CENTRALIZADO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'PAÑOL EMT',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'PAS',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'PATIO 7',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'PERFO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'POLICLINICO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'RECURSOS HIDRICOS',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'RPT MINA SUR',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'SILOS',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'TERMICA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'TERMINAL VIAL',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$ubicacionID = Ubicacion::where('nombre', 'División Ministro Hales')->first()->id;

		Base::create([
			'direccion' => 'SALA DE CONTROL',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CIO',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'BODEGA ACT',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CCTV',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'SALA DESCANSO BAHIA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'MOLIENDA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'CASINO MINA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'SALA CCTV',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'BRIGADA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'SINDICATO DMH  BALMACEDA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$ubicacionID = Ubicacion::where('nombre', 'División Radomiro Tomic')->first()->id;

		Base::create([
			'direccion' => 'ACT',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'BODEGA C7',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'C7',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'APILADOR',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'ARAMARK',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		Base::create([
			'direccion' => 'SALAS ELECTRICA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$tipobaseID = TipoBase::where('nombre', 'Despacho')->value('id');
		$ubicacionID = Ubicacion::where('nombre', 'División Ministro Hales')->first()->id;

		Base::create([
			'direccion' => 'DESPACHO MINA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$ubicacionID = Ubicacion::where('nombre', 'División Chuquicamata')->first()->id;

		Base::create([
			'direccion' => 'DESPACHO MINA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);

		$ubicacionID = Ubicacion::where('nombre', 'División Radomiro Tomic')->first()->id;

		Base::create([
			'direccion' => 'DESPACHO MINA',
			'TipoBase_id'=>$tipobaseID,
		])->ubicacionRadio()->create(['Ubicacion_id'=>$ubicacionID]);
	}
}
