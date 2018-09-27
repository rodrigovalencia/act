<?php

use App\Equipo;
use App\TipoEquipo;
use Illuminate\Database\Seeder;

class Equipo_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Equipo::truncate();

		$tipoEquipoID = TipoEquipo::where('nombre', 'BULLDOZER')->value('id');

		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '5',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '3',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '326',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '3505',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '401',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '402',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '403',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '404',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '405',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '406',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '407',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '408',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '429',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '431',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '435',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '436',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '441',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '444',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '446',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '447',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '448',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '449',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '450',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '451',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '452',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '453',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '454',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '455',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '457',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '458',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '485',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '550',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '570',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '576',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '577',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '578',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '590',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '592',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '657',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '719',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '402',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '459',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '709',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '841',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '842',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		Equipo::create([
			'numero' => '885',
			'tipoEquipo_id' =>$tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'CAEX')->value('id');

		Equipo::create([
			'numero' => '326',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '0',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '10',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '119',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '120',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '121',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '122',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '123',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '124',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '125',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '126',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '127',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '128',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '129',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '130',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '150',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '151',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '152',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '153',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '154',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '155',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '156',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '157',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '160',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '161',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '162',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '163',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '164',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '165',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '166',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '167',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '168',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '19',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '301',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '302',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '302',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '303',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '303',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '304',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '305',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '307',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '308',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '309',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '311',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '312',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '313',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '314',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '316',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '317',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '318',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '319',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '320',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '321',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '322',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '323',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '324',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '325',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '326',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '327',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '328',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '329',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '330',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '331',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '332',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '334',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '335',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '336',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '361',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '362',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '364',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3796',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3807',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3812',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '407',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '409',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '410',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '413',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '415',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '416',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '417',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '418',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '420',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '421',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '423',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '442',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '443',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '445',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '446',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '447',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '448',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '449',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '452',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '453',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '454',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '455',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '456',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '457',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '458',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '459',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '461',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '463',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '464',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '468',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '472',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '473',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '474',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '475',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '476',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '477',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '478',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '506',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '510',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '511',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '512',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '513',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '514',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '515',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '516',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '517',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '708',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '713',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '714',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '716',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '717',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '719',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '720',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '721',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '722',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '724',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '725',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '726',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '727',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '809',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '810',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '811',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '818',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '820',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '821',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '822',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '823',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '824',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '826',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '828',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '829',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '830',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '831',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '832',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '833',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '840',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '841',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '842',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '843',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '844',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '845',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '847',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '848',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '849',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '850',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '851',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '852',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '854',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '856',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '857',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '861',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '864',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '865',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '866',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '868',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '869',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '870',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '901',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '901',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '903',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '903',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '904',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '905',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '906',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '907',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '907',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '908',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '908',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '909',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '909',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '910',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '911',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '911',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '912',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '913',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '913',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '914',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '914',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '915',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '916',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '917',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '918',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '919',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '919',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '920',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '921',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '922',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '923',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '924',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '925',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '926',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '927',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '928',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '929',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '930',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '931',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '932',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '933',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '934',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '935',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '936',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '939',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '940',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '942',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '943',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'CAMION')->value('id');

		Equipo::create([
			'numero' => '1247',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3347',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3401',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3404',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3405',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3435',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3439',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3442',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3455',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3476',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '901',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '902',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'CAMION TRANSPORTE ESCORIA')->value('id');

		Equipo::create([
			'numero' => '657',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '659',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '660',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '661',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'CAMIONETA')->value('id');

		Equipo::create([
			'numero' => '0',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1111',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1204',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1205',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1214',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1222',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1224',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1230',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1235',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1238',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1246',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1248',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1260',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1401',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1402',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1404',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1406',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1407',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1409',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1411',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1412',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1413',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1414',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1415',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1417',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1418',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1419',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1420',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1425',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1427',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1429',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1430',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1480',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1481',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1487',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1488',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1500',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1501',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1502',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '201410',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '204',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '207',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '222',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '225',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '226',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '230',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '244',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3140',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3212',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3213',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3297',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5000',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5003',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5004',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5005',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5010',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5011',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5012',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5013',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5014',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5015',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5018',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5019',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5020',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5021',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5023',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5024',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5025',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5026',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5027',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5028',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5029',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5030',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5031',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5032',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5033',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '505312',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5105',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5106',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5108',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5112',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5113',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5115',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5202',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5205',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5206',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5213',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5218',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5220',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5224',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5300',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5301',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5306',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5307',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5400',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5402',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5403',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5404',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5405',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5701',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5702',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5703',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5706',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5708',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5829',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5908',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '5910',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '60',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6061',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6075',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '61',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6152',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6164',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6209',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6212',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6225',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6285',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6323',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6324',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6328',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6335',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6363',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6367',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6369',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6370',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6378',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6381',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6388',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6392',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6394',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6401',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6414',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6417',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6423',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6424',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6439',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6446',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6448',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6449',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6467',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6471',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6473',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6474',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6476',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6479',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6481',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6491',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6496',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6500',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6508',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6509',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6510',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6511',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6512',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6513',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6514',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6515',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6516',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6519',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6522',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6523',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6524',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6525',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6526',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6527',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6528',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6529',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6530',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6531',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6534',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6535',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6536',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6537',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6539',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6540',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6541',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6547',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6556',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6558',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6560',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6561',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6563',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6564',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6565',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6566',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6570',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6575',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6576',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6584',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6594',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6595',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6596',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6597',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6599',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6601',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6615',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6616',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6619',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6621',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6901',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '6904',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '9074',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '9116',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '9472',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '9868',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '9919',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'CARRY ALL')->value('id');

		Equipo::create([
			'numero' => '0',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '117',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3787',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3789',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3790',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3791',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3792',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3793',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3794',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3797',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3798',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3800',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3801',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3802',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3805',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3806',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3809',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3810',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3814',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3815',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'GRUA HORQUILLA')->value('id');

		Equipo::create([
			'numero' => '9',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3145',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3184',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3188',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3192',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3193',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'GRUA MORGAN')->value('id');

		Equipo::create([
			'numero' => '4',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'GRUA NEUMATICO')->value('id');

		Equipo::create([
			'numero' => '3',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '4',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '613',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'LOCOMOTORA')->value('id');

		Equipo::create([
			'numero' => '14',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '15',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'MOTONIVELADORA')->value('id');

		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '4',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '415',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '416',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '417',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '418',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '441',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '442',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '482',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '483',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '484',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '486',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '656',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '762',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '763',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '795',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '796',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '4043',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'PALA')->value('id');

		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '96',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '100',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '101',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '200',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '201',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '202',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '202',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '203',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '203',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '204',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '204',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '205',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '206',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '209',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '210',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '211',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '211',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '212',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '213',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '214',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '230',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '250',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '251',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '28',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '601',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '718',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '890',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '893',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '894',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '895',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'PERFORADORA')->value('id');

		Equipo::create([
			'numero' => '6',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '7',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '9',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '10',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '101',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '102',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '103',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '104',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '107',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '109',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '110',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '111',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '112',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '113',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '114',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '115',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '313',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '316',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '317',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '318',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '362',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '363',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '365',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '366',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '367',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'REGADOR')->value('id');

		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '12',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '501',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '502',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '503',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '505',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '507',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '509',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '510',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8211',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8256',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8257',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8258',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8259',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8260',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8267',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '8272',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'RETROEXCAVADORA')->value('id');

		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '3453',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '600',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '606',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '608',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '609',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '611',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '612',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'SPRADER')->value('id');

		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'WHEELDOZER')->value('id');

		Equipo::create([
			'numero' => '5',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '1177',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '421',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '423',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '424',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '430',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '432',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '433',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '434',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '488',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '591',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '607',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '612',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '615',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '616',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '617',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '618',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '619',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '623',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '624',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '625',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '631',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '633',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '634',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '697',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '713',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '715',
			'tipoEquipo_id' => $tipoEquipoID,
		]);

		$tipoEquipoID = TipoEquipo::where('nombre', 'WHEELLOADER')->value('id');

		Equipo::create([
			'numero' => '1',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '2',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '4',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '611',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '633',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '840',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '882',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
		Equipo::create([
			'numero' => '883',
			'tipoEquipo_id' => $tipoEquipoID,
		]);
	}
}
