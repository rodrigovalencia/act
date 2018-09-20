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
    	DominioContrato::truncate();
    	
		$dominioID = Ubicacion::where('nombre', 'División Chuquicamata')->value('id');
		$empresaID = Empresa::where('nombre', 'ADM PLANNING CONSULTORES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501682830',
			'finicio' => Carbon::parse('13-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501682830')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'AGREDUCAM - ASOC. GREMIAL DE DUENOS DE CAM. CAL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015795',
			'finicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015795')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501686086',
			'finicio' => Carbon::parse('25-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501686086')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501686080',
			'finicio' => Carbon::parse('25-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501686080')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'AGUAS Y RILES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501731104',
			'finicio' => Carbon::parse('10-09-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-09-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501731104')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015769',
			'finicio' => Carbon::parse('02-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015769')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ALPHA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014952',
			'finicio' => Carbon::parse('05-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014952')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ARAMARK')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015165',
			'finicio' => Carbon::parse('01-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015165')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016078',
			'finicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-07-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016078')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'AVA MONTAJES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016104',
			'finicio' => Carbon::parse('05-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016104')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BESALCO MAQUINARIAS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012492',
			'finicio' => Carbon::parse('04-01-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600012492')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012455',
			'finicio' => Carbon::parse('01-01-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600012455')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016174',
			'finicio' => Carbon::parse('26-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('26-02-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016174')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'C & G SERVICIOS INDUSTRIALES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014490',
			'finicio' => Carbon::parse('08-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('07-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014490')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CIMAP LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014898',
			'finicio' => Carbon::parse('27-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014898')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014378',
			'finicio' => Carbon::parse('19-10-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('19-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014378')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO DEVELP-VESPUCIO SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015560',
			'finicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015560')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO TUNNING-TSE UNOSPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501767109',
			'finicio' => Carbon::parse('23-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('23-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501767109')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CONTITECH')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600015263',
			'finicio' => Carbon::parse('02-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-01-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015263')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4501533891',
			'finicio' => Carbon::parse('01-05-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501533891')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4501648075',
			'finicio' => Carbon::parse('02-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501648075')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501735239',
			'finicio' => Carbon::parse('23-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('23-10-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501735239')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'DETROIT CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014374',
			'finicio' => Carbon::parse('24-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014374')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600008863',
			'finicio' => Carbon::parse('01-07-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600008863')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'EQUIPOS TREX S.P.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600015558',
			'finicio' => Carbon::parse('24-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-07-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015558')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ESM SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016448',
			'finicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016448')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'FINNING CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600013080',
			'finicio' => Carbon::parse('12-02-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-04-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600013080')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014590',
			'finicio' => Carbon::parse('18-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-03-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014590')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015391',
			'finicio' => Carbon::parse('10-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015391')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GEMINIS SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014763',
			'finicio' => Carbon::parse('01-07-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014763')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600007679',
			'finicio' => Carbon::parse('01-01-2009')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600007679')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600016411',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016411')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'HIDROMFD S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015784',
			'finicio' => Carbon::parse('02-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-10-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015784')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'HIGH SERVICE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015330',
			'finicio' => Carbon::parse('01-03-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015330')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'INSTALFRIO S.P.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600013411',
			'finicio' => Carbon::parse('20-12-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('20-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600013411')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'INTEREXPORT S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501516294',
			'finicio' => Carbon::parse('01-02-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501516294')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'INVERSIONES IMPACTO S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015738',
			'finicio' => Carbon::parse('11-09-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('11-09-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015738')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'JKL EIRL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015143',
			'finicio' => Carbon::parse('26-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015143')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014619',
			'finicio' => Carbon::parse('15-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-03-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014619')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600009184',
			'finicio' => Carbon::parse('27-09-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-09-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600009184')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600011399',
			'finicio' => Carbon::parse('01-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600011399')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015267',
			'finicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-01-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015267')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'LINDE GAS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012239',
			'finicio' => Carbon::parse('01-07-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600012239')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MAGNA IV')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501700753',
			'finicio' => Carbon::parse('10-05-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-09-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501700753')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MINECOMCAL CHILE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015115',
			'finicio' => Carbon::parse('11-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015115')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016385',
			'finicio' => Carbon::parse('22-05-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('22-05-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016385')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MORGAN INDUSTRIAL S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015292',
			'finicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015292')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'PROMEC S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012646',
			'finicio' => Carbon::parse('01-02-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600012646')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'R&Q')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501672123',
			'finicio' => Carbon::parse('21-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('11-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501672123')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'RADIADORES GOMEZ LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015390',
			'finicio' => Carbon::parse('03-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015390')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SEGEA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501600517',
			'finicio' => Carbon::parse('01-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501600517')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SEGURYCEL S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014323',
			'finicio' => Carbon::parse('14-09-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-09-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014323')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SEMAR LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016142',
			'finicio' => Carbon::parse('22-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('22-01-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016142')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015787',
			'finicio' => Carbon::parse('01-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('20-09-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015787')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SERCOING LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015374',
			'finicio' => Carbon::parse('28-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015374')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501655134',
			'finicio' => Carbon::parse('02-11-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-11-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501655134')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014493',
			'finicio' => Carbon::parse('08-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('08-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014493')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501639442',
			'finicio' => Carbon::parse('02-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-08-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501639442')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015174',
			'finicio' => Carbon::parse('25-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015174')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014466',
			'finicio' => Carbon::parse('26-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('26-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014466')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014116',
			'finicio' => Carbon::parse('16-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014116')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600015208',
			'finicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015208')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SUATRANS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501210551',
			'finicio' => Carbon::parse('01-11-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-10-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501210551')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TRANSPORTES DI SEVERINO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600013208',
			'finicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600013208')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TRANYMEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016188',
			'finicio' => Carbon::parse('19-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('19-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016188')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TREPSA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014360',
			'finicio' => Carbon::parse('17-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014360')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600016139',
			'finicio' => Carbon::parse('01-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016139')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TTM CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016459',
			'finicio' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016459')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'WORLD CLASS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501690654',
			'finicio' => Carbon::parse('22-05-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('22-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501690654')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ZUBLIN GEOVITAS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501634332',
			'finicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-03-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501634332')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$dominioID = Ubicacion::where('nombre', 'División Gabriela Mistral')->value('id');
		$empresaID = Empresa::where('nombre', 'ANMAR')->value('id');


		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501555430',
			'finicio' => Carbon::parse('29-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('29-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501555430')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'AYRES SECURITY')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501569956',
			'finicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501569956')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BRIDGESTONE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014727',
			'finicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014727')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501793766',
			'finicio' => Carbon::parse('24-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501793766')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600016633',
			'finicio' => Carbon::parse('27-08-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-09-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016633')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501605494',
			'finicio' => Carbon::parse('01-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501605494')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'COASIN CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014270',
			'finicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014270')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501749302',
			'finicio' => Carbon::parse('05-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-08-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501749302')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CONSTRUCTORA CERRO NEVADO S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015616',
			'finicio' => Carbon::parse('05-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-06-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015616')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'DISAL CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501622986',
			'finicio' => Carbon::parse('12-04-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-04-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501622986')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ECORA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501709002',
			'finicio' => Carbon::parse('06-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501709002')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501796867',
			'finicio' => Carbon::parse('26-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('04-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501796867')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016344',
			'finicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016344')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GEOROCK S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015823',
			'finicio' => Carbon::parse('18-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015823')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016088',
			'finicio' => Carbon::parse('21-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('20-12-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016088')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501731701',
			'finicio' => Carbon::parse('14-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-08-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501731701')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GUIÑEZ')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501776029',
			'finicio' => Carbon::parse('16-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-04-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501776029')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'INDUSTRIAL Y COMERCIAL MANTOS GROUP S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501777554',
			'finicio' => Carbon::parse('28-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501777554')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015946',
			'finicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-04-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015946')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015615',
			'finicio' => Carbon::parse('19-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('19-07-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015615')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MINEPRO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015518',
			'finicio' => Carbon::parse('02-05-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015518')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015934',
			'finicio' => Carbon::parse('02-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-01-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015934')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MINING SERVICE GROUP')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015785',
			'finicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015785')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MINNING SYSTEMS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501693421',
			'finicio' => Carbon::parse('30-04-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501693421')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MODULAR')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015366',
			'finicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2024')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015366')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'MUTUAL DE SEGURIDAD C.CH.C.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501594106',
			'finicio' => Carbon::parse('11-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-01-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501594106')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'NUEVA ANCOR TECMIN S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501788249',
			'finicio' => Carbon::parse('03-05-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501788249')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'PARES Y ALVAREZ SERVICIOS PROFESIONALES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016221',
			'finicio' => Carbon::parse('27-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016221')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'RESITER')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501760505',
			'finicio' => Carbon::parse('01-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-01-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501760505')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501590838',
			'finicio' => Carbon::parse('06-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('06-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501590838')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SALFA MANTENCIONES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501792006',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501792006')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501751932',
			'finicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501751932')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016090',
			'finicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016090')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SIEMENS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016483',
			'finicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016483')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SITRANS SERVICIOS INTEGRADOS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501589000',
			'finicio' => Carbon::parse('01-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501589000')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SKF')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014980',
			'finicio' => Carbon::parse('25-09-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('25-09-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014980')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SOC. COMERCIAL ALVAREZ Y ALVAREZ LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501658010',
			'finicio' => Carbon::parse('14-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501658010')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012438',
			'finicio' => Carbon::parse('01-12-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600012438')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TANDEM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013415',
			'finicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600013415')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TESRA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501678504',
			'finicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501678504')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TORQUE INGENIERIA SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501713545',
			'finicio' => Carbon::parse('05-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501713545')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TYCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501594523',
			'finicio' => Carbon::parse('11-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501594523')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015786',
			'finicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015786')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015541',
			'finicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015541')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$dominioID = Ubicacion::where('nombre', 'División Ministro Hales')->value('id');
		$empresaID = Empresa::where('nombre', 'AGUAS Y RILES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501611679',
			'finicio' => Carbon::parse('31-03-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501611679')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'AGUASIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4516785999',
			'finicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4516785999')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ANMAR')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501587537',
			'finicio' => Carbon::parse('01-12-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501587537')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ARAMARK')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011494',
			'finicio' => Carbon::parse('01-05-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600011494')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501731915',
			'finicio' => Carbon::parse('23-03-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('23-03-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501731915')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4610015659',
			'finicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-08-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4610015659')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4610001565',
			'finicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-08-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4610001565')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'AUSTIN INGENIEROS CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015706',
			'finicio' => Carbon::parse('17-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015706')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014574',
			'finicio' => Carbon::parse('16-02-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014574')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501595991',
			'finicio' => Carbon::parse('06-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501595991')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'C & G SERVICIOS INDUSTRIALES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501587280',
			'finicio' => Carbon::parse('01-01-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501587280')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501782149',
			'finicio' => Carbon::parse('05-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501782149')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'CESMEC S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4500168954',
			'finicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4500168954')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501689544',
			'finicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501689544')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501783765',
			'finicio' => Carbon::parse('01-05-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501783765')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015819',
			'finicio' => Carbon::parse('15-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-12-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015819')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'COPEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501533896',
			'finicio' => Carbon::parse('01-05-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501533896')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'COSTELLA PROYECTOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501792245',
			'finicio' => Carbon::parse('16-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-07-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501792245')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016442',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-05-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016442')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501781459',
			'finicio' => Carbon::parse('15-05-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501781459')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'DT INDUSTRIAL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400193544',
			'finicio' => Carbon::parse('16-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4400193544')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'DYNO NOBEL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016434',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016434')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ECOTERMICA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501696132',
			'finicio' => Carbon::parse('23-03-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('23-03-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501696132')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009777',
			'finicio' => Carbon::parse('01-06-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600009777')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'EXPLORACIONES MINERAS ANDINAS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014480',
			'finicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-11-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014480')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'EXSA CHILE SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016347',
			'finicio' => Carbon::parse('05-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016347')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'FINNING CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009553',
			'finicio' => Carbon::parse('09-02-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-02-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600009553')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600009584',
			'finicio' => Carbon::parse('28-09-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-09-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600009584')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'FOURTHANE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016276',
			'finicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-03-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016276')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'GEO ATACAMA CONSULTORES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400184162',
			'finicio' => Carbon::parse('24-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('24-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4400184162')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '372017',
			'finicio' => Carbon::parse('01-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '372017')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501690352',
			'finicio' => Carbon::parse('15-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501690352')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'HIDROMEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501359397',
			'finicio' => Carbon::parse('01-05-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-05-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501359397')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'HIGH SERVICE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501713189',
			'finicio' => Carbon::parse('16-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('19-06-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501713189')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501494083',
			'finicio' => Carbon::parse('17-11-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501494083')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ICV S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501770550',
			'finicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501770550')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'ISS SERVICIOS INTEGRALES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501757801',
			'finicio' => Carbon::parse('05-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-01-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501757801')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'JIGSAW TECHNOLOGIES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010017',
			'finicio' => Carbon::parse('01-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-01-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600010017')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'JKL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501796595',
			'finicio' => Carbon::parse('17-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('17-07-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501796595')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'JOINT VENTURE AAGG')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015685',
			'finicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-07-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015685')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600001023',
			'finicio' => Carbon::parse('04-06-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600001023')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010180',
			'finicio' => Carbon::parse('05-05-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-05-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600010180')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400177742',
			'finicio' => Carbon::parse('21-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('16-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4400177742')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4400185661',
			'finicio' => Carbon::parse('12-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4400185661')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'METRIKA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501745909',
			'finicio' => Carbon::parse('21-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('20-11-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501745909')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'MONTAJES DEL PACIFICO S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501632582',
			'finicio' => Carbon::parse('20-07-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501632582')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'MSMIN LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016036',
			'finicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016036')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'OHL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501765588',
			'finicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-04-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501765588')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'OUTOTEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501402493',
			'finicio' => Carbon::parse('09-10-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501402493')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'PSINET CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016091',
			'finicio' => Carbon::parse('01-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016091')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'REVESOL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501771792',
			'finicio' => Carbon::parse('09-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-02-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501771792')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'RFP LOGISTICA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501758283',
			'finicio' => Carbon::parse('08-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-01-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501758283')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SERVINA SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501769171',
			'finicio' => Carbon::parse('12-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-02-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501769171')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501679609',
			'finicio' => Carbon::parse('01-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501679609')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SGS SIGA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400189373',
			'finicio' => Carbon::parse('01-04-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-03-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4400189373')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501577935',
			'finicio' => Carbon::parse('06-10-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('05-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501577935')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4502577935',
			'finicio' => Carbon::parse('01-10-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4502577935')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SOLETANCHE BACHY')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015776',
			'finicio' => Carbon::parse('23-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015776')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SOTRASER')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016437',
			'finicio' => Carbon::parse('03-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016437')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013185',
			'finicio' => Carbon::parse('01-07-2014')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600013185')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SUATRANS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501404054',
			'finicio' => Carbon::parse('28-10-2013')->format('Y/m/d'),
			'ftermino' => Carbon::parse('27-10-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501404054')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'SUEZ CHILE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015175',
			'finicio' => Carbon::parse('31-12-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015175')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'VAI')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501768343',
			'finicio' => Carbon::parse('24-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501768343')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'VALIDAR TRAIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '6873366',
			'finicio' => Carbon::parse('17-05-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-11-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '6873366')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501526528',
			'finicio' => Carbon::parse('01-03-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('02-03-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501526528')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		
		$empresaID = Empresa::where('nombre', 'VOLCAN NEVADO LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015167',
			'finicio' => Carbon::parse('10-01-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('10-01-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015167')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$dominioID = Ubicacion::where('nombre', 'División Radomiro Tomic')->value('id');
		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501752911',
			'finicio' => Carbon::parse('13-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-12-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501752911')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'APPLUS NORCONTROL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501743400',
			'finicio' => Carbon::parse('01-11-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-11-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501743400')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016079',
			'finicio' => Carbon::parse('03-07-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-07-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016079')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014190',
			'finicio' => Carbon::parse('05-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-08-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014190')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501669175',
			'finicio' => Carbon::parse('03-08-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('03-08-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501669175')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BUILDTEK S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016439',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-06-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016439')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014979',
			'finicio' => Carbon::parse('01-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-08-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014979')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501533894',
			'finicio' => Carbon::parse('01-05-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501533894')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600016451',
			'finicio' => Carbon::parse('01-07-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-06-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016451')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'DETROIT CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011554',
			'finicio' => Carbon::parse('01-11-2012')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-11-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600011554')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'DISTRIBUIDORA CUMMINS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600006518',
			'finicio' => Carbon::parse('21-08-2008')->format('Y/m/d'),
			'ftermino' => Carbon::parse('21-08-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600006518')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501783252',
			'finicio' => Carbon::parse('01-05-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('08-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501783252')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009667',
			'finicio' => Carbon::parse('01-06-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600009667')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'EPIROC CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010484',
			'finicio' => Carbon::parse('01-01-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-01-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600010484')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'F.C.A. TRANSPORTES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501758749',
			'finicio' => Carbon::parse('21-12-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2018')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501758749')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'FAM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501532818',
			'finicio' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('28-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501532818')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'GEOPERACIONES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501746623',
			'finicio' => Carbon::parse('06-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('06-03-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501746623')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ICL CATODOS LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501771158',
			'finicio' => Carbon::parse('14-03-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('13-03-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501771158')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'ICS VALLE DE LA LUNA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501505780',
			'finicio' => Carbon::parse('01-01-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-12-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501505780')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'INDUSTRIAL SUPPORT COMPANY LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014492',
			'finicio' => Carbon::parse('01-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-02-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014492')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'JM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014575',
			'finicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014575')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009065',
			'finicio' => Carbon::parse('09-08-2010')->format('Y/m/d'),
			'ftermino' => Carbon::parse('09-08-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600009065')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600010233',
			'finicio' => Carbon::parse('01-06-2011')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-02-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600010233')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4500629318',
			'finicio' => Carbon::parse('31-10-2007')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-10-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4500629318')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'NEW TECH COPPER')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501561404',
			'finicio' => Carbon::parse('30-11-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('30-09-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501561404')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'POWER TRAIN TECHNOLOGIES CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016490',
			'finicio' => Carbon::parse('01-08-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2023')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016490')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'PSINET CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501750095',
			'finicio' => Carbon::parse('08-01-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('08-04-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501750095')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'PUCARA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501649724',
			'finicio' => Carbon::parse('12-08-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('12-08-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501649724')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501781659',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501781659')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'R&O LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501707785',
			'finicio' => Carbon::parse('01-06-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501707785')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SALMAG')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015884',
			'finicio' => Carbon::parse('01-10-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-05-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015884')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SANDVIK CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014784',
			'finicio' => Carbon::parse('01-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-07-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014784')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SCHWAGER SERVICES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014164',
			'finicio' => Carbon::parse('31-07-2015')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014164')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014981',
			'finicio' => Carbon::parse('16-09-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-09-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014981')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014573',
			'finicio' => Carbon::parse('01-04-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-04-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600014573')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501715388',
			'finicio' => Carbon::parse('01-08-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-07-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501715388')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'SOMACOR')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501632583',
			'finicio' => Carbon::parse('16-06-2016')->format('Y/m/d'),
			'ftermino' => Carbon::parse('15-06-2021')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4501632583')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TECNOLOGIAS COBRA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '1400007032',
			'finicio' => Carbon::parse('01-06-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('31-05-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '1400007032')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TORQUE INGENIERIA SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015802',
			'finicio' => Carbon::parse('01-11-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('01-11-2020')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015802')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'TRANYMEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015148',
			'finicio' => Carbon::parse('15-02-2017')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-02-2022')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600015148')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);

		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016195',
			'finicio' => Carbon::parse('15-02-2018')->format('Y/m/d'),
			'ftermino' => Carbon::parse('14-02-2019')->format('Y/m/d'),
			'dominioContrato_id' => $dominioID,
		]);

		$contratoID = Contrato::where('numero', '4600016195')->value('id');

		DominioContrato::create([
			'DominioContrato_id' => $contratoID,
			'DominioContrato_type' => 'Ubicacion',
		]);
    }
}