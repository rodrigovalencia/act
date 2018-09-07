<?php

use App\Contrato;
use App\Empresa;
use App\Ubicacion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Contrato_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Contrato::truncate();

		$ubicacionID = Ubicacion::where('nombre', 'División Chuquicamata')->value('id');
		$empresaID = Empresa::where('nombre', 'ACHIARDI')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012456',
			'finicio' => Carbon::parse('17-12-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ACT S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012162',
			'finicio' => Carbon::parse('29-05-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501336690',
			'finicio' => Carbon::parse('19-02-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('07-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ANMAR')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013300',
			'finicio' => Carbon::parse('18-10-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-04-2014')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'APPLUS NORCONTROL')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501380796',
			'finicio' => Carbon::parse('17-07-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-09-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ARAMARK')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012212',
			'finicio' => Carbon::parse('01-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501509776',
			'finicio' => Carbon::parse('01-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ARCADIS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501672787',
			'finicio' => Carbon::parse('27-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-11-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ASTALDI')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501364590',
			'finicio' => Carbon::parse('01-04-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600003512',
			'finicio' => Carbon::parse('02-08-2004')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AVA MONTAJES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501701063',
			'finicio' => Carbon::parse('13-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AVANT SERV. INTEGRALES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009769',
			'finicio' => Carbon::parse('30-10-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'B.BOSCH S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501614395',
			'finicio' => Carbon::parse('01-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUILDTEK S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501744479',
			'finicio' => Carbon::parse('04-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011902',
			'finicio' => Carbon::parse('01-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600012203',
			'finicio' => Carbon::parse('01-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014593',
			'finicio' => Carbon::parse('12-04-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('11-04-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUSES JM PULLMAN S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600001221',
			'finicio' => Carbon::parse('01-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'C & G SERVICIOS INDUSTRIALES LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015890',
			'finicio' => Carbon::parse('15-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CARLOS ESCARATE Y CIA. LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011997',
			'finicio' => Carbon::parse('01-04-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-04-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600011710',
			'finicio' => Carbon::parse('16-08-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-08-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501682877',
			'finicio' => Carbon::parse('07-03-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CESMEC S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012154',
			'finicio' => Carbon::parse('01-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501615773',
			'finicio' => Carbon::parse('13-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CHESTA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501501139',
			'finicio' => Carbon::parse('10-12-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501393107',
			'finicio' => Carbon::parse('05-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-07-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501392548',
			'finicio' => Carbon::parse('05-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-04-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4100013956',
			'finicio' => Carbon::parse('22-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COASIN CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011563',
			'finicio' => Carbon::parse('01-08-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO ACCIONA-OSSA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501563466',
			'finicio' => Carbon::parse('22-09-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO CELLE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4500280202',
			'finicio' => Carbon::parse('09-09-2002')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO ZAÑARTU')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501517741',
			'finicio' => Carbon::parse('02-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSTRUCTORA CERRO NEVADO S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013055',
			'finicio' => Carbon::parse('02-06-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONTITECH')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012401',
			'finicio' => Carbon::parse('01-11-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-11-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONVEYOR BELT TECNOLOGY')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014751',
			'finicio' => Carbon::parse('04-07-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COSANDO CONT. Y MONTAJE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009740',
			'finicio' => Carbon::parse('04-04-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-04-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COSTELLA PROYECTOS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501473142',
			'finicio' => Carbon::parse('12-08-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-08-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501437837',
			'finicio' => Carbon::parse('01-04-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DICTUC S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501550021',
			'finicio' => Carbon::parse('16-06-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-02-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DISTINTEC SPA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009547',
			'finicio' => Carbon::parse('24-01-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DISTRIBUIDORA CUMMINS CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014045',
			'finicio' => Carbon::parse('08-05-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600007649',
			'finicio' => Carbon::parse('01-02-2009')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DRILLCO TOOLS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010125',
			'finicio' => Carbon::parse('27-04-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014244',
			'finicio' => Carbon::parse('01-12-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DURATRAY SPA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014585',
			'finicio' => Carbon::parse('01-04-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ELECNOR CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501537156',
			'finicio' => Carbon::parse('13-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('22-02-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501756369',
			'finicio' => Carbon::parse('15-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('23-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EQUIPOS TREX S.P.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600008507',
			'finicio' => Carbon::parse('30-01-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ESM SPA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014399',
			'finicio' => Carbon::parse('01-11-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'FERROSTAAL CHILE S.A.C.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501522702',
			'finicio' => Carbon::parse('23-03-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('08-09-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GEONOR LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501480235',
			'finicio' => Carbon::parse('02-09-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501646389',
			'finicio' => Carbon::parse('03-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'HEWLETT PACKARD S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501282127',
			'finicio' => Carbon::parse('04-06-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-06-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'HRI S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011618',
			'finicio' => Carbon::parse('20-07-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('20-07-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ICV S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015652',
			'finicio' => Carbon::parse('13-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'IMA INDUSTRIAL LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011562',
			'finicio' => Carbon::parse('17-03-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-06-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'IMS PATAGONIA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600007601',
			'finicio' => Carbon::parse('15-05-2009')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-09-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ING. Y SERV. COLLANTS LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501681345',
			'finicio' => Carbon::parse('16-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-04-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INGETROL S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501483457',
			'finicio' => Carbon::parse('23-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501464357',
			'finicio' => Carbon::parse('14-10-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-05-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INSSO S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501506702',
			'finicio' => Carbon::parse('01-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INSTALFRIO S.P.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014913',
			'finicio' => Carbon::parse('26-07-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('22-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INVERSIONES IMPACTO S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013574',
			'finicio' => Carbon::parse('01-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ITM LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501630097',
			'finicio' => Carbon::parse('30-05-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JANSSEN S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600006716',
			'finicio' => Carbon::parse('04-02-2008')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501433413',
			'finicio' => Carbon::parse('26-01-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KATECS Y CIA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015539',
			'finicio' => Carbon::parse('11-05-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-11-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KB INGENIERIA SANITARIOS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501593730',
			'finicio' => Carbon::parse('10-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('07-10-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600004456',
			'finicio' => Carbon::parse('01-09-2005')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010970',
			'finicio' => Carbon::parse('01-01-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KUPFER HERMANOS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010113',
			'finicio' => Carbon::parse('01-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600013772',
			'finicio' => Carbon::parse('01-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'LAVANDERIA ALBIA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600008463',
			'finicio' => Carbon::parse('01-03-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-08-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014994',
			'finicio' => Carbon::parse('01-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'LIEBHERR CHILE SPA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014209',
			'finicio' => Carbon::parse('24-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('23-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'LIMPIANDO EL SUR')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501270902',
			'finicio' => Carbon::parse('03-06-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MANANTIAL')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501561073',
			'finicio' => Carbon::parse('03-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501647618',
			'finicio' => Carbon::parse('22-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MECANICA INDUSTRIAL S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011972',
			'finicio' => Carbon::parse('01-03-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-02-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MOL AMBIENTE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501095465',
			'finicio' => Carbon::parse('01-11-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-11-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'NEXXO S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013796',
			'finicio' => Carbon::parse('16-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-04-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ORICA CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501366356',
			'finicio' => Carbon::parse('16-05-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-05-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ORPAK LATINA SPA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501046812',
			'finicio' => Carbon::parse('11-12-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'POCH CONSULTORES & ASOCIADOS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501762356',
			'finicio' => Carbon::parse('02-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PRECISION S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4601046812',
			'finicio' => Carbon::parse('01-09-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'R&Q')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501493517',
			'finicio' => Carbon::parse('01-11-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'RELSA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013881',
			'finicio' => Carbon::parse('14-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-04-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SANAM LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013421',
			'finicio' => Carbon::parse('02-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SANDVIK CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013353',
			'finicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SERVASOL LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501549042',
			'finicio' => Carbon::parse('15-06-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-06-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SERVING CONSULTORES LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501527053',
			'finicio' => Carbon::parse('24-03-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-10-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501490050',
			'finicio' => Carbon::parse('01-10-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-10-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501402492',
			'finicio' => Carbon::parse('12-10-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600015296',
			'finicio' => Carbon::parse('14-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SIERRA Y PLAZA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501567335',
			'finicio' => Carbon::parse('01-09-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501523215',
			'finicio' => Carbon::parse('09-03-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('08-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501245147',
			'finicio' => Carbon::parse('14-02-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SIGA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501333787',
			'finicio' => Carbon::parse('23-01-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('26-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600013373',
			'finicio' => Carbon::parse('01-11-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('19-04-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SIGMA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015054',
			'finicio' => Carbon::parse('01-11-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('07-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SK GODELIUS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501533935',
			'finicio' => Carbon::parse('22-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('22-04-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SK INDUSTRIAL S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010353',
			'finicio' => Carbon::parse('01-07-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SNC LAVALIN CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501661404',
			'finicio' => Carbon::parse('16-10-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('29-03-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501681168',
			'finicio' => Carbon::parse('09-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SOLETANCHE BACHY')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600008975',
			'finicio' => Carbon::parse('02-08-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-08-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SPM INGENIEROS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501517595',
			'finicio' => Carbon::parse('10-03-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-03-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009230',
			'finicio' => Carbon::parse('03-02-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-02-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600010179',
			'finicio' => Carbon::parse('15-06-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013202',
			'finicio' => Carbon::parse('13-08-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600013999',
			'finicio' => Carbon::parse('28-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-04-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SUPEREX S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501548803',
			'finicio' => Carbon::parse('31-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501507229',
			'finicio' => Carbon::parse('12-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('11-04-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TERRA SERVICES S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501691300',
			'finicio' => Carbon::parse('15-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TREPSA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014053',
			'finicio' => Carbon::parse('15-06-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-12-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4500610325',
			'finicio' => Carbon::parse('17-02-2006')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TROMAX S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501737269',
			'finicio' => Carbon::parse('01-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TTM CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012400',
			'finicio' => Carbon::parse('01-11-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WELLFIELD')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014808',
			'finicio' => Carbon::parse('28-07-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WLS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600008666',
			'finicio' => Carbon::parse('01-09-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WORKMATE SERVICIOS TRANSITORIOS LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501442927',
			'finicio' => Carbon::parse('01-04-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WORLD CLASS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501448789',
			'finicio' => Carbon::parse('21-04-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-04-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WUTHCO LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501656260',
			'finicio' => Carbon::parse('19-10-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-08-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$ubicacionID = Ubicacion::where('nombre', 'División Gabriela Mistral')->value('id');
		$empresaID = Empresa::where('nombre', 'ANDINOR')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501762508',
			'finicio' => Carbon::parse('19-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501356575',
			'finicio' => Carbon::parse('18-03-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('18-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AUSTIN INGENIEROS CHILE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501413276',
			'finicio' => Carbon::parse('29-01-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('29-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BAILAC')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014279',
			'finicio' => Carbon::parse('01-09-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BESALCO MAQUINARIAS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501602548',
			'finicio' => Carbon::parse('01-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUSANC')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400164203',
			'finicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('20-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COMERCIAL FADE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501747180',
			'finicio' => Carbon::parse('27-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO HIGH SERVICE METSO LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501551547',
			'finicio' => Carbon::parse('09-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CRUZ & DAVILA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012277',
			'finicio' => Carbon::parse('06-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600015439',
			'finicio' => Carbon::parse('05-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-04-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DVA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501736408',
			'finicio' => Carbon::parse('25-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DYNO NOBEL')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501734888',
			'finicio' => Carbon::parse('01-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016230',
			'finicio' => Carbon::parse('02-05-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GREEN CORE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501501471',
			'finicio' => Carbon::parse('12-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('11-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600006648',
			'finicio' => Carbon::parse('01-01-2008')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600005809',
			'finicio' => Carbon::parse('01-08-2007')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501344680',
			'finicio' => Carbon::parse('01-06-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MODULAR')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501679728',
			'finicio' => Carbon::parse('28-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SALFA MANTENCIONES S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501529759',
			'finicio' => Carbon::parse('04-05-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501556773',
			'finicio' => Carbon::parse('21-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SANTA ELVIRA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012592',
			'finicio' => Carbon::parse('01-01-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501553686',
			'finicio' => Carbon::parse('07-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501344830',
			'finicio' => Carbon::parse('01-01-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501561072',
			'finicio' => Carbon::parse('04-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-02-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501760261',
			'finicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TERRA SERVICES S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501672508',
			'finicio' => Carbon::parse('01-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WSP CONSULTING CHILE  LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501765582',
			'finicio' => Carbon::parse('05-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-04-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);



		$ubicacionID = Ubicacion::where('nombre', 'División Ministro Hales')->value('id');

		$empresaID = Empresa::where('nombre', 'AGUASIN')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501400189',
			'finicio' => Carbon::parse('01-11-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ALPHA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501704108',
			'finicio' => Carbon::parse('10-05-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-06-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AQUALOGY')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012200',
			'finicio' => Carbon::parse('01-07-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ARAUCANIA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501541910',
			'finicio' => Carbon::parse('01-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ATCO SABINCO')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '40',
			'finicio' => Carbon::parse('27-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AUSTIN ARRENDAMIENTOS LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501458070',
			'finicio' => Carbon::parse('01-06-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600015203',
			'finicio' => Carbon::parse('24-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AUSTIN INGENIEROS CHILE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013096',
			'finicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501389471',
			'finicio' => Carbon::parse('13-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-08-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AVANT SERV. INTEGRALES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012606',
			'finicio' => Carbon::parse('01-01-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400168750',
			'finicio' => Carbon::parse('15-09-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501395753',
			'finicio' => Carbon::parse('01-09-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501283534',
			'finicio' => Carbon::parse('13-06-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501600236',
			'finicio' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501744843',
			'finicio' => Carbon::parse('19-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CESMEC S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501331846',
			'finicio' => Carbon::parse('12-12-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-12-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501481362',
			'finicio' => Carbon::parse('01-09-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COASIN CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501505468',
			'finicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501770601',
			'finicio' => Carbon::parse('19-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501526713',
			'finicio' => Carbon::parse('05-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-04-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501526551',
			'finicio' => Carbon::parse('26-05-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DISAL CHILE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501548567',
			'finicio' => Carbon::parse('01-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600013123',
			'finicio' => Carbon::parse('01-07-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014934',
			'finicio' => Carbon::parse('01-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DITT CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501744192',
			'finicio' => Carbon::parse('10-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('08-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DT INDUSTRIAL')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501698492',
			'finicio' => Carbon::parse('05-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501662293',
			'finicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DUSTCONTROL S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501692939',
			'finicio' => Carbon::parse('24-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-05-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EULEN')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501510179',
			'finicio' => Carbon::parse('04-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GAC')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501560155',
			'finicio' => Carbon::parse('01-06-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GEODATOS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501515540',
			'finicio' => Carbon::parse('24-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GEOTEC BOYLES BROSS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '332017',
			'finicio' => Carbon::parse('01-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501578192',
			'finicio' => Carbon::parse('02-11-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE MINE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501500850',
			'finicio' => Carbon::parse('29-12-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('29-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'IMS PATAGONIA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501675667',
			'finicio' => Carbon::parse('15-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '392017',
			'finicio' => Carbon::parse('15-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501595969',
			'finicio' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INGENALSE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501711293',
			'finicio' => Carbon::parse('12-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INSITU CORE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501567646',
			'finicio' => Carbon::parse('21-09-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('18-01-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JIGSAW TECHNOLOGIES LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501599643',
			'finicio' => Carbon::parse('01-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600004457',
			'finicio' => Carbon::parse('31-03-2005')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014269',
			'finicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-07-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'LET GRAF')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501604278',
			'finicio' => Carbon::parse('04-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501739678',
			'finicio' => Carbon::parse('02-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'METAPROJECT')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501522901',
			'finicio' => Carbon::parse('17-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-03-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501722351',
			'finicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MPM LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501734301',
			'finicio' => Carbon::parse('25-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'OCYRE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501667426',
			'finicio' => Carbon::parse('25-11-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-04-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ORBIT')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501662988',
			'finicio' => Carbon::parse('02-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ORICA CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501366362',
			'finicio' => Carbon::parse('16-05-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'OTRACO CHILE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012230',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SALFA MANTENCIONES S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501481970',
			'finicio' => Carbon::parse('01-12-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SALFA MONTAJES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '8401481970',
			'finicio' => Carbon::parse('01-12-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('07-06-2015')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SANDVIK CHILE S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014249',
			'finicio' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SERVICIOS GEOFISICOS COMPROBE SPA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '402017',
			'finicio' => Carbon::parse('05-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SKF')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014418',
			'finicio' => Carbon::parse('06-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SODEXO')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501526737',
			'finicio' => Carbon::parse('01-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SOTRASER')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501392534',
			'finicio' => Carbon::parse('28-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501392532',
			'finicio' => Carbon::parse('28-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TGI CONSULTORES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501529825',
			'finicio' => Carbon::parse('01-04-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'VAI')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501672038',
			'finicio' => Carbon::parse('15-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$ubicacionID = Ubicacion::where('nombre', 'División Radomiro Tomic')->value('id');
		$empresaID = Empresa::where('nombre', 'AVA MONTAJES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501743397',
			'finicio' => Carbon::parse('30-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-01-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BAILAC')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012173',
			'finicio' => Carbon::parse('04-06-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012227',
			'finicio' => Carbon::parse('01-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUILDTEK S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012607',
			'finicio' => Carbon::parse('05-02-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501710017',
			'finicio' => Carbon::parse('15-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-10-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CESMEC S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501469402',
			'finicio' => Carbon::parse('01-08-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO ABENGOA MPM S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501754357',
			'finicio' => Carbon::parse('18-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501345598',
			'finicio' => Carbon::parse('07-02-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-08-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501409897',
			'finicio' => Carbon::parse('01-11-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-10-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DISAL CHILE LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501308878',
			'finicio' => Carbon::parse('19-11-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('19-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DRILLCO TOOLS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014172',
			'finicio' => Carbon::parse('01-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ELIQSA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501733195',
			'finicio' => Carbon::parse('02-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501494088',
			'finicio' => Carbon::parse('01-12-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ICEM S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501545891',
			'finicio' => Carbon::parse('09-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ICV S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501450059',
			'finicio' => Carbon::parse('10-12-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501578214',
			'finicio' => Carbon::parse('10-12-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INNOVATOR CONVEYOR BELT')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014166',
			'finicio' => Carbon::parse('05-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JIGSAW TECHNOLOGIES LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4500926099',
			'finicio' => Carbon::parse('01-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-08-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KATECS Y CIA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501508693',
			'finicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010907',
			'finicio' => Carbon::parse('05-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-01-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'METALCAE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501725868',
			'finicio' => Carbon::parse('12-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-03-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'METRIKA LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501775735',
			'finicio' => Carbon::parse('09-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4050177573',
			'finicio' => Carbon::parse('09-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'OTRACO CHILE')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012229',
			'finicio' => Carbon::parse('01-08-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PAISAJISMO SERVICIOS OASIS')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501558802',
			'finicio' => Carbon::parse('10-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PUCARA')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501436984',
			'finicio' => Carbon::parse('01-04-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SCHWAGER SERVICES S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501761140',
			'finicio' => Carbon::parse('24-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-08-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SK GODELIUS S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501730815',
			'finicio' => Carbon::parse('02-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-09-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SMG INGENIERIA S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501765976',
			'finicio' => Carbon::parse('15-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TECHMEC LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501548500',
			'finicio' => Carbon::parse('18-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('26-02-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TECNOLOGIAS COBRA LTDA.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015879',
			'finicio' => Carbon::parse('26-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('26-05-2018')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TECNOLOGIA EN TRANSPORTE DE MINERALES S.A.')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501640214',
			'finicio' => Carbon::parse('27-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2017')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'VALIDAR TRAIN')-> value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501518170',
			'finicio' => Carbon::parse('16-11-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2016')->format('Y/m/d'),
			'ubicacion_id' => $ubicacionID,
		]);
	}
}
