<?php

use App\Contrato;
use App\DominioContrato;
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

		//CODELCO
		$dominioID = DominioContrato::
			join('Faena', 'Faena.id', '=', 'DominioContrato.dominio_id')
			->select('DominioContrato.id')
			->where('DominioContrato.dominio_type', 'Faena')
			->where('Faena.nombre', 'CODELCO NORTE')
			->first()->id;

		$empresaID = Empresa::where('nombre', 'CODELCO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'999999999',
			'fInicio' => Carbon::parse('01-01-2000')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2049')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		//TERCEROS
		$dominioID = DominioContrato::
			join('Ubicacion', 'Ubicacion.id', '=', 'DominioContrato.dominio_id')
			->select('DominioContrato.id')
			->where('DominioContrato.dominio_type', 'Ubicacion')
			->where('Ubicacion.nombre', 'División Chuquicamata')
			->first()->id;

		$empresaID = Empresa::where('nombre', 'ADM PLANNING CONSULTORES')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501682830',
			'fInicio' => Carbon::parse('13-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('13-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'AGREDUCAM - ASOC. GREMIAL DE DUENOS DE CAM. CAL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015795',
			'fInicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-04-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501686086',
			'fInicio' => Carbon::parse('25-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('25-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501686080',
			'fInicio' => Carbon::parse('25-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'AGUAS Y RILES S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501731104',
			'fInicio' => Carbon::parse('10-09-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('10-09-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015769',
			'fInicio' => Carbon::parse('02-10-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-09-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ALPHA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014952',
			'fInicio' => Carbon::parse('05-09-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-09-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ARAMARK')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015165',
			'fInicio' => Carbon::parse('01-01-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016078',
			'fInicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('03-07-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'AVA MONTAJES')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016104',
			'fInicio' => Carbon::parse('05-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('04-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BESALCO MAQUINARIAS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600012492',
			'fInicio' => Carbon::parse('04-01-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600012455',
			'fInicio' => Carbon::parse('01-01-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016174',
			'fInicio' => Carbon::parse('26-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('26-02-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'C & G SERVICIOS INDUSTRIALES LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600014490',
			'fInicio' => Carbon::parse('08-03-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('07-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CIMAP LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014898',
			'fInicio' => Carbon::parse('27-09-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('27-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014378',
			'fInicio' => Carbon::parse('19-10-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('19-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO DEVELP-VESPUCIO SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015560',
			'fInicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO TUNNING-TSE UNOSPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501767109',
			'fInicio' => Carbon::parse('23-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('23-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CONTITECH')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600015263',
			'fInicio' => Carbon::parse('02-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-01-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4501533891',
			'fInicio' => Carbon::parse('01-05-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4501648075',
			'fInicio' => Carbon::parse('02-08-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501735239',
			'fInicio' => Carbon::parse('23-10-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('23-10-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'DETROIT CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600014374',
			'fInicio' => Carbon::parse('24-08-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('24-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600008863',
			'fInicio' => Carbon::parse('01-07-2010')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'EQUIPOS TREX S.P.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600015558',
			'fInicio' => Carbon::parse('24-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('24-07-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ESM SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016448',
			'fInicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'FINNING CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600013080',
			'fInicio' => Carbon::parse('12-02-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('27-04-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014590',
			'fInicio' => Carbon::parse('18-02-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-03-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015391',
			'fInicio' => Carbon::parse('10-04-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('10-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GEMINIS SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600014763',
			'fInicio' => Carbon::parse('01-07-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600007679',
			'fInicio' => Carbon::parse('01-01-2009')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600016411',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-05-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'HIDROMFD S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015784',
			'fInicio' => Carbon::parse('02-10-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('02-10-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'HIGH SERVICE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015330',
			'fInicio' => Carbon::parse('01-03-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'INSTALFRIO S.P.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600013411',
			'fInicio' => Carbon::parse('20-12-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('20-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'INTEREXPORT S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501516294',
			'fInicio' => Carbon::parse('01-02-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'INVERSIONES IMPACTO S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015738',
			'fInicio' => Carbon::parse('11-09-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('11-09-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'JKL EIRL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015143',
			'fInicio' => Carbon::parse('26-12-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('21-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014619',
			'fInicio' => Carbon::parse('15-03-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-03-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600009184',
			'fInicio' => Carbon::parse('27-09-2010')->format('Y/m/d'),
			'fTermino' => Carbon::parse('27-09-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600011399',
			'fInicio' => Carbon::parse('01-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-09-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015267',
			'fInicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-01-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'LINDE GAS CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600012239',
			'fInicio' => Carbon::parse('01-07-2013')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MAGNA IV')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501700753',
			'fInicio' => Carbon::parse('10-05-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-09-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MINECOMCAL CHILE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015115',
			'fInicio' => Carbon::parse('11-12-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-11-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016385',
			'fInicio' => Carbon::parse('22-05-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('22-05-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MORGAN INDUSTRIAL S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015292',
			'fInicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'PROMEC S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600012646',
			'fInicio' => Carbon::parse('01-02-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'R&Q')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501672123',
			'fInicio' => Carbon::parse('21-12-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('11-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'RADIADORES GOMEZ LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015390',
			'fInicio' => Carbon::parse('03-04-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('10-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SEGEA LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501600517',
			'fInicio' => Carbon::parse('01-03-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SEGURYCEL S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014323',
			'fInicio' => Carbon::parse('14-09-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-09-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SEMAR LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016142',
			'fInicio' => Carbon::parse('22-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('22-01-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015787',
			'fInicio' => Carbon::parse('01-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('20-09-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SERCOING LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015374',
			'fInicio' => Carbon::parse('28-04-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('27-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SES')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501655134',
			'fInicio' => Carbon::parse('02-11-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-11-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014493',
			'fInicio' => Carbon::parse('08-02-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('08-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501639442',
			'fInicio' => Carbon::parse('02-08-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('02-08-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600015174',
			'fInicio' => Carbon::parse('25-01-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('25-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600014466',
			'fInicio' => Carbon::parse('26-03-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('26-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600014116',
			'fInicio' => Carbon::parse('16-07-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600015208',
			'fInicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SUATRANS')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501210551',
			'fInicio' => Carbon::parse('01-11-2011')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-10-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TRANSPORTES DI SEVERINO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600013208',
			'fInicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TRANYMEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016188',
			'fInicio' => Carbon::parse('19-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('19-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TREPSA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600014360',
			'fInicio' => Carbon::parse('17-08-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('17-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' =>'4600016139',
			'fInicio' => Carbon::parse('01-03-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TTM CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4600016459',
			'fInicio' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-07-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'WORLD CLASS')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501690654',
			'fInicio' => Carbon::parse('22-05-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('22-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ZUBLIN GEOVITAS')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' =>'4501634332',
			'fInicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('16-03-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$dominioID = DominioContrato::
					join('Ubicacion', 'Ubicacion.id', '=', 'DominioContrato.dominio_id')
					->select('DominioContrato.id')
					->where('DominioContrato.dominio_type', 'Ubicacion')
					->where('Ubicacion.nombre', 'División Gabriela Mistral')
					->first()->id;
		$empresaID = Empresa::where('nombre', 'ANMAR')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501555430',
			'fInicio' => Carbon::parse('29-07-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('29-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'AYRES SECURITY')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501569956',
			'fInicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-09-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BRIDGESTONE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014727',
			'fInicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501793766',
			'fInicio' => Carbon::parse('24-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('24-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4600016633',
			'fInicio' => Carbon::parse('27-08-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('02-09-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501605494',
			'fInicio' => Carbon::parse('01-03-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'COASIN CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014270',
			'fInicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501749302',
			'fInicio' => Carbon::parse('05-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-08-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSTRUCTORA CERRO NEVADO S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015616',
			'fInicio' => Carbon::parse('05-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-06-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'DISAL CHILE LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501622986',
			'fInicio' => Carbon::parse('12-04-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('12-04-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ECORA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501709002',
			'fInicio' => Carbon::parse('06-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501796867',
			'fInicio' => Carbon::parse('26-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('04-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016344',
			'fInicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GEOROCK S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015823',
			'fInicio' => Carbon::parse('18-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('17-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016088',
			'fInicio' => Carbon::parse('21-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('20-12-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501731701',
			'fInicio' => Carbon::parse('14-08-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-08-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GUIÑEZ')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501776029',
			'fInicio' => Carbon::parse('16-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-04-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'INDUSTRIAL Y COMERCIAL MANTOS GROUP S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501777554',
			'fInicio' => Carbon::parse('28-03-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015946',
			'fInicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-04-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015615',
			'fInicio' => Carbon::parse('19-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('19-07-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MINEPRO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015518',
			'fInicio' => Carbon::parse('02-05-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015934',
			'fInicio' => Carbon::parse('02-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('02-01-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MINING SERVICE GROUP')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015785',
			'fInicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MINNING SYSTEMS')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501693421',
			'fInicio' => Carbon::parse('30-04-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-04-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MODULAR')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015366',
			'fInicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2024')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'MUTUAL DE SEGURIDAD C.CH.C.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501594106',
			'fInicio' => Carbon::parse('11-01-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('10-01-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'NUEVA ANCOR TECMIN S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501788249',
			'fInicio' => Carbon::parse('03-05-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('02-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'PARES Y ALVAREZ SERVICIOS PROFESIONALES LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016221',
			'fInicio' => Carbon::parse('27-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'RESITER')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501760505',
			'fInicio' => Carbon::parse('01-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-01-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501590838',
			'fInicio' => Carbon::parse('06-01-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('06-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SALFA MANTENCIONES S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501792006',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501751932',
			'fInicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016090',
			'fInicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SIEMENS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016483',
			'fInicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SITRANS SERVICIOS INTEGRADOS')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501589000',
			'fInicio' => Carbon::parse('01-02-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SKF')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014980',
			'fInicio' => Carbon::parse('25-09-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('25-09-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SOC. COMERCIAL ALVAREZ Y ALVAREZ LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501658010',
			'fInicio' => Carbon::parse('14-09-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-11-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600012438',
			'fInicio' => Carbon::parse('01-12-2013')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TANDEM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600013415',
			'fInicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TESRA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501678504',
			'fInicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TORQUE INGENIERIA SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501713545',
			'fInicio' => Carbon::parse('05-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TYCO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501594523',
			'fInicio' => Carbon::parse('11-01-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('10-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015786',
			'fInicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015541',
			'fInicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$dominioID = DominioContrato::
					join('Ubicacion', 'Ubicacion.id', '=', 'DominioContrato.dominio_id')
					->select('DominioContrato.id')
					->where('DominioContrato.dominio_type', 'Ubicacion')
					->where('Ubicacion.nombre', 'División Ministro Hales')
					->first()->id;
		$empresaID = Empresa::where('nombre', 'AGUAS Y RILES S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501611679',
			'fInicio' => Carbon::parse('31-03-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'AGUASIN')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4516785999',
			'fInicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ANMAR')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501587537',
			'fInicio' => Carbon::parse('01-12-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'ARAMARK')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600011494',
			'fInicio' => Carbon::parse('01-05-2013')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-04-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501731915',
			'fInicio' => Carbon::parse('23-03-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('23-03-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4610015659',
			'fInicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-08-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4610001565',
			'fInicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-08-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'AUSTIN INGENIEROS CHILE LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015706',
			'fInicio' => Carbon::parse('17-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('17-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4600014574',
			'fInicio' => Carbon::parse('16-02-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('16-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501595991',
			'fInicio' => Carbon::parse('06-10-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'C & G SERVICIOS INDUSTRIALES LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501587280',
			'fInicio' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4501782149',
			'fInicio' => Carbon::parse('05-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'CESMEC S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4500168954',
			'fInicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4501689544',
			'fInicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4501783765',
			'fInicio' => Carbon::parse('01-05-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015819',
			'fInicio' => Carbon::parse('15-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-12-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'COPEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501533896',
			'fInicio' => Carbon::parse('01-05-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'COSTELLA PROYECTOS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501792245',
			'fInicio' => Carbon::parse('16-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('16-07-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016442',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-05-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501781459',
			'fInicio' => Carbon::parse('15-05-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'DT INDUSTRIAL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4400193544',
			'fInicio' => Carbon::parse('16-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'DYNO NOBEL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016434',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'ECOTERMICA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501696132',
			'fInicio' => Carbon::parse('23-03-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('23-03-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600009777',
			'fInicio' => Carbon::parse('01-06-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'EXPLORACIONES MINERAS ANDINAS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014480',
			'fInicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('13-11-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'EXSA CHILE SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016347',
			'fInicio' => Carbon::parse('05-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'FINNING CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600009553',
			'fInicio' => Carbon::parse('09-02-2011')->format('Y/m/d'),
			'fTermino' => Carbon::parse('09-02-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4600009584',
			'fInicio' => Carbon::parse('28-09-2011')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-09-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'FOURTHANE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016276',
			'fInicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-03-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'GEO ATACAMA CONSULTORES LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4400184162',
			'fInicio' => Carbon::parse('24-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('24-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '372017',
			'fInicio' => Carbon::parse('01-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501690352',
			'fInicio' => Carbon::parse('15-01-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'HIDROMEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501359397',
			'fInicio' => Carbon::parse('01-05-2013')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-05-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'HIGH SERVICE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501713189',
			'fInicio' => Carbon::parse('16-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('19-06-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4501494083',
			'fInicio' => Carbon::parse('17-11-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('21-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'ICV S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501770550',
			'fInicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'ISS SERVICIOS INTEGRALES LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501757801',
			'fInicio' => Carbon::parse('05-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-01-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'JIGSAW TECHNOLOGIES LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600010017',
			'fInicio' => Carbon::parse('01-08-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-01-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'JKL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501796595',
			'fInicio' => Carbon::parse('17-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('17-07-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'JOINT VENTURE AAGG')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015685',
			'fInicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-07-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600001023',
			'fInicio' => Carbon::parse('04-06-2011')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600010180',
			'fInicio' => Carbon::parse('05-05-2011')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-05-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4400177742',
			'fInicio' => Carbon::parse('21-03-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('16-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4400185661',
			'fInicio' => Carbon::parse('12-03-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'METRIKA LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501745909',
			'fInicio' => Carbon::parse('21-11-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('20-11-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'MONTAJES DEL PACIFICO S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501632582',
			'fInicio' => Carbon::parse('20-07-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'MSMIN LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016036',
			'fInicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'OHL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501765588',
			'fInicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-04-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'OUTOTEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501402493',
			'fInicio' => Carbon::parse('09-10-2013')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'PSINET CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016091',
			'fInicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'REVESOL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501771792',
			'fInicio' => Carbon::parse('09-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-02-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'RFP LOGISTICA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501758283',
			'fInicio' => Carbon::parse('08-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-01-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SERVINA SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501769171',
			'fInicio' => Carbon::parse('12-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('12-02-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501679609',
			'fInicio' => Carbon::parse('01-01-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SGS SIGA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4400189373',
			'fInicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-03-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501577935',
			'fInicio' => Carbon::parse('06-10-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('05-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4502577935',
			'fInicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-09-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SOLETANCHE BACHY')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015776',
			'fInicio' => Carbon::parse('23-10-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SOTRASER')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016437',
			'fInicio' => Carbon::parse('03-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('03-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600013185',
			'fInicio' => Carbon::parse('01-07-2014')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SUATRANS')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501404054',
			'fInicio' => Carbon::parse('28-10-2013')->format('Y/m/d'),
			'fTermino' => Carbon::parse('27-10-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'SUEZ CHILE')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015175',
			'fInicio' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'VAI')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501768343',
			'fInicio' => Carbon::parse('24-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'VALIDAR TRAIN')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '6873366',
			'fInicio' => Carbon::parse('17-05-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501526528',
			'fInicio' => Carbon::parse('01-03-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('02-03-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		
		$empresaID = Empresa::where('nombre', 'VOLCAN NEVADO LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015167',
			'fInicio' => Carbon::parse('10-01-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('10-01-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$dominioID = DominioContrato::
					join('Ubicacion', 'Ubicacion.id', '=', 'DominioContrato.dominio_id')
					->select('DominioContrato.id')
					->where('DominioContrato.dominio_type', 'Ubicacion')
					->where('Ubicacion.nombre', 'División Radomiro Tomic')
					->first()->id;
		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501752911',
			'fInicio' => Carbon::parse('13-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('13-12-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'APPLUS NORCONTROL')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501743400',
			'fInicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-11-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016079',
			'fInicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('03-07-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014190',
			'fInicio' => Carbon::parse('05-08-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('03-08-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501669175',
			'fInicio' => Carbon::parse('03-08-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('03-08-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BUILDTEK S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016439',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-06-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014979',
			'fInicio' => Carbon::parse('01-09-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-08-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501533894',
			'fInicio' => Carbon::parse('01-05-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4600016451',
			'fInicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-06-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'DETROIT CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600011554',
			'fInicio' => Carbon::parse('01-11-2012')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-11-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'DISTRIBUIDORA CUMMINS CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600006518',
			'fInicio' => Carbon::parse('21-08-2008')->format('Y/m/d'),
			'fTermino' => Carbon::parse('21-08-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501783252',
			'fInicio' => Carbon::parse('01-05-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('08-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600009667',
			'fInicio' => Carbon::parse('01-06-2010')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'EPIROC CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600010484',
			'fInicio' => Carbon::parse('01-01-2010')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-01-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'F.C.A. TRANSPORTES')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501758749',
			'fInicio' => Carbon::parse('21-12-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'FAM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501532818',
			'fInicio' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('28-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'GEOPERACIONES')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501746623',
			'fInicio' => Carbon::parse('06-03-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('06-03-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ICL CATODOS LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501771158',
			'fInicio' => Carbon::parse('14-03-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('13-03-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'ICS VALLE DE LA LUNA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501505780',
			'fInicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'INDUSTRIAL SUPPORT COMPANY LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014492',
			'fInicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-02-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'JM')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014575',
			'fInicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600009065',
			'fInicio' => Carbon::parse('09-08-2010')->format('Y/m/d'),
			'fTermino' => Carbon::parse('09-08-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4600010233',
			'fInicio' => Carbon::parse('01-06-2011')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-02-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4500629318',
			'fInicio' => Carbon::parse('31-10-2007')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-10-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'NEW TECH COPPER')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501561404',
			'fInicio' => Carbon::parse('30-11-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('30-09-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'POWER TRAIN TECHNOLOGIES CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016490',
			'fInicio' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-07-2023')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'PSINET CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501750095',
			'fInicio' => Carbon::parse('08-01-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('08-04-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'PUCARA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501649724',
			'fInicio' => Carbon::parse('12-08-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('12-08-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4501781659',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'R&O LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501707785',
			'fInicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SALMAG')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015884',
			'fInicio' => Carbon::parse('01-10-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-05-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SANDVIK CHILE S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014784',
			'fInicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-07-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SCHWAGER SERVICES S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014164',
			'fInicio' => Carbon::parse('31-07-2015')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-07-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		Contrato::create([
			'Empresa_id' => $empresaID, 
			'numero' => '4600014981',
			'fInicio' => Carbon::parse('16-09-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-09-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600014573',
			'fInicio' => Carbon::parse('01-04-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-04-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501715388',
			'fInicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-07-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'SOMACOR')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4501632583',
			'fInicio' => Carbon::parse('16-06-2016')->format('Y/m/d'),
			'fTermino' => Carbon::parse('15-06-2021')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TECNOLOGIAS COBRA LTDA.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '1400007032',
			'fInicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('31-05-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TORQUE INGENIERIA SPA')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015802',
			'fInicio' => Carbon::parse('01-11-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('01-11-2020')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'TRANYMEC')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600015148',
			'fInicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-02-2022')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'Empresa_id' => $empresaID,
			'numero' => '4600016195',
			'fInicio' => Carbon::parse('15-02-2018')->format('Y/m/d'),
			'fTermino' => Carbon::parse('14-02-2019')->format('Y/m/d'),
			'DominioContrato_id' => $dominioID,
		]);

	}
}