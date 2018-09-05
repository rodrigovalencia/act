<?php

use Illuminate\Database\Seeder;

class ContratoInactivo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$ubicacionID = Ubicacion::where('nombre', 'División Chuquicamata')->value('id');
		$empresaID = Empresa::where('nombre', 'ADM PLANNING CONSULTORES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501682830',
			'finicio' => '13-02-2017',
			'ftermino' => '13-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AGREDUCAM - ASOC. GREMIAL DE DUENOS DE CAM. CAL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015795',
			'finicio' => '01-11-2017',
			'ftermino' => '30-04-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501686086',
			'finicio' => '25-02-2017',
			'ftermino' => '25-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501686080',
			'finicio' => '25-02-2017',
			'ftermino' => '28-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AGUAS Y RILES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501731104',
			'finicio' => '10-09-2017',
			'ftermino' => '10-09-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015769',
			'finicio' => '02-10-2017',
			'ftermino' => '30-09-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ALPHA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014952',
			'finicio' => '05-09-2016',
			'ftermino' => '30-09-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ARAMARK')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015165',
			'finicio' => '01-01-2017',
			'ftermino' => '01-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016078',
			'finicio' => '03-07-2017',
			'ftermino' => '03-07-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AVA MONTAJES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016104',
			'finicio' => '05-02-2018',
			'ftermino' => '04-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BESALCO MAQUINARIAS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012492',
			'finicio' => '04-01-2014',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012455',
			'finicio' => '01-01-2014',
			'ftermino' => '31-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016174',
			'finicio' => '26-02-2018',
			'ftermino' => '26-02-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'C & G')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014490',
			'finicio' => '08-03-2016',
			'ftermino' => '07-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CIMAP LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014898',
			'finicio' => '27-09-2016',
			'ftermino' => '27-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014378',
			'finicio' => '19-10-2015',
			'ftermino' => '19-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO DEVELP-VESPUCIO SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015560',
			'finicio' => '01-06-2017',
			'ftermino' => '31-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSORCIO TUNNING-TSE UNOSPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501767109',
			'finicio' => '23-07-2018',
			'ftermino' => '23-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONTITECH')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600015263',
			'finicio' => '02-02-2017',
			'ftermino' => '31-01-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4501533891',
			'finicio' => '01-05-2015',
			'ftermino' => '30-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4501648075',
			'finicio' => '02-08-2016',
			'ftermino' => '30-11-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501735239',
			'finicio' => '23-10-2017',
			'ftermino' => '23-10-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DETROIT CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014374',
			'finicio' => '24-08-2015',
			'ftermino' => '24-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600008863',
			'finicio' => '01-07-2010',
			'ftermino' => '31-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EQUIPOS TREX S.P.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600015558',
			'finicio' => '24-07-2017',
			'ftermino' => '24-07-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ESM SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016448',
			'finicio' => '01-07-2018',
			'ftermino' => '30-06-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'FINNING CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600013080',
			'finicio' => '12-02-2014',
			'ftermino' => '27-04-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014590',
			'finicio' => '18-02-2016',
			'ftermino' => '28-03-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015391',
			'finicio' => '10-04-2017',
			'ftermino' => '10-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GEMINIS SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014763',
			'finicio' => '01-07-2016',
			'ftermino' => '30-06-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600007679',
			'finicio' => '01-01-2009',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600016411',
			'finicio' => '01-06-2018',
			'ftermino' => '30-05-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'HIDROMFD S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015784',
			'finicio' => '02-10-2017',
			'ftermino' => '02-10-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'HIGH SERVICE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015330',
			'finicio' => '01-03-2017',
			'ftermino' => '05-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INSTALFRIO S.P.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600013411',
			'finicio' => '20-12-2014',
			'ftermino' => '20-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INTEREXPORT S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501516294',
			'finicio' => '01-02-2015',
			'ftermino' => '01-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INVERSIONES IMPACTO S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015738',
			'finicio' => '11-09-2017',
			'ftermino' => '11-09-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JKL EIRL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015143',
			'finicio' => '26-12-2016',
			'ftermino' => '21-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014619',
			'finicio' => '15-03-2016',
			'ftermino' => '14-03-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600009184',
			'finicio' => '27-09-2010',
			'ftermino' => '27-09-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600011399',
			'finicio' => '01-07-2017',
			'ftermino' => '30-09-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KONECRANES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015267',
			'finicio' => '01-02-2017',
			'ftermino' => '30-01-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'LINDE GAS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012239',
			'finicio' => '01-07-2013',
			'ftermino' => '01-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MAGNA IV')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501700753',
			'finicio' => '10-05-2017',
			'ftermino' => '28-09-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINECOMCAL CHILE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015115',
			'finicio' => '11-12-2016',
			'ftermino' => '30-11-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016385',
			'finicio' => '22-05-2018',
			'ftermino' => '22-05-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MORGAN INDUSTRIAL S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015292',
			'finicio' => '01-06-2017',
			'ftermino' => '31-05-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PROMEC S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600012646',
			'finicio' => '01-02-2014',
			'ftermino' => '28-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'R&Q')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501672123',
			'finicio' => '21-12-2016',
			'ftermino' => '11-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'RADIADORES GOMEZ LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015390',
			'finicio' => '03-04-2017',
			'ftermino' => '10-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SEGEA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501600517',
			'finicio' => '01-03-2016',
			'ftermino' => '01-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SEGURYCEL S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014323',
			'finicio' => '14-09-2014',
			'ftermino' => '14-09-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SEMAR LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016142',
			'finicio' => '22-01-2018',
			'ftermino' => '22-01-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015787',
			'finicio' => '01-12-2017',
			'ftermino' => '20-09-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SERCOING LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015374',
			'finicio' => '28-04-2017',
			'ftermino' => '27-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501655134',
			'finicio' => '02-11-2016',
			'ftermino' => '01-11-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014493',
			'finicio' => '08-02-2016',
			'ftermino' => '08-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501639442',
			'finicio' => '02-08-2016',
			'ftermino' => '02-08-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600015174',
			'finicio' => '25-01-2017',
			'ftermino' => '25-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014466',
			'finicio' => '26-03-2016',
			'ftermino' => '26-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600014116',
			'finicio' => '16-07-2015',
			'ftermino' => '14-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600015208',
			'finicio' => '15-02-2017',
			'ftermino' => '15-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SUATRANS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501210551',
			'finicio' => '01-11-2011',
			'ftermino' => '30-10-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TRANSPORTES DI SEVERINO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600013208',
			'finicio' => '01-08-2017',
			'ftermino' => '31-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TRANYMEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016188',
			'finicio' => '19-02-2018',
			'ftermino' => '19-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TREPSA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600014360',
			'finicio' => '17-08-2015',
			'ftermino' => '17-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' =>'4600016139',
			'finicio' => '01-03-2018',
			'ftermino' => '28-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TTM CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4600016459',
			'finicio' => '01-08-2018',
			'ftermino' => '31-07-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'WORLD CLASS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501690654',
			'finicio' => '22-05-2017',
			'ftermino' => '22-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ZUBLIN GEOVITAS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' =>'4501634332',
			'finicio' => '01-06-2016',
			'ftermino' => '16-03-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$ubicacionID = Ubicacion::where('nombre', 'División Gabriela Mistral')->value('id');
		$empresaID = Empresa::where('nombre', 'ANMAR')->value('id');


		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501555430',
			'finicio' => '29-07-2015',
			'ftermino' => '29-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'AYRES SECURITY')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501569956',
			'finicio' => '01-10-2015',
			'ftermino' => '30-09-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BRIDGESTONE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014727',
			'finicio' => '01-06-2016',
			'ftermino' => '31-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501793766',
			'finicio' => '24-07-2018',
			'ftermino' => '24-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600016633',
			'finicio' => '27-08-2018',
			'ftermino' => '02-09-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501605494',
			'finicio' => '01-03-2016',
			'ftermino' => '01-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COASIN CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014270',
			'finicio' => '01-10-2015',
			'ftermino' => '01-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501749302',
			'finicio' => '05-01-2018',
			'ftermino' => '05-08-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CONSTRUCTORA CERRO NEVADO S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015616',
			'finicio' => '05-06-2017',
			'ftermino' => '05-06-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DISAL CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501622986',
			'finicio' => '12-04-2016',
			'ftermino' => '12-04-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ECORA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501709002',
			'finicio' => '06-06-2017',
			'ftermino' => '31-05-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501796867',
			'finicio' => '26-06-2018',
			'ftermino' => '04-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016344',
			'finicio' => '01-07-2018',
			'ftermino' => '30-06-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GEOROCK S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015823',
			'finicio' => '18-12-2017',
			'ftermino' => '17-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GLOBAL SERVICE SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016088',
			'finicio' => '21-12-2017',
			'ftermino' => '20-12-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501731701',
			'finicio' => '14-08-2017',
			'ftermino' => '14-08-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GUIÑEZ')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501776029',
			'finicio' => '16-04-2018',
			'ftermino' => '15-04-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INDUSTRIAL Y COMERCIAL MANTOS GROUP S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501777554',
			'finicio' => '28-03-2018',
			'ftermino' => '30-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015946',
			'finicio' => '01-04-2018',
			'ftermino' => '01-04-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015615',
			'finicio' => '19-07-2017',
			'ftermino' => '19-07-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINEPRO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015518',
			'finicio' => '02-05-2017',
			'ftermino' => '30-06-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINETEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015934',
			'finicio' => '02-01-2018',
			'ftermino' => '02-01-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINING SERVICE GROUP')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015785',
			'finicio' => '01-11-2017',
			'ftermino' => '31-10-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MINNING SYSTEMS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501693421',
			'finicio' => '30-04-2017',
			'ftermino' => '30-04-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MODULAR')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015366',
			'finicio' => '01-01-2018',
			'ftermino' => '31-12-2024',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'MUTUAL DE SEGURIDAD C.CH.C.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501594106',
			'finicio' => '11-01-2016',
			'ftermino' => '10-01-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'NUEVA ANCOR TECMIN S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501788249',
			'finicio' => '03-05-2018',
			'ftermino' => '02-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PARES Y ALVAREZ SERVICIOS PROFESIONALES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016221',
			'finicio' => '27-02-2018',
			'ftermino' => '28-02-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'RESITER')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501760505',
			'finicio' => '01-02-2018',
			'ftermino' => '31-01-2023',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501590838',
			'finicio' => '06-01-2016',
			'ftermino' => '06-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SALFA MANTENCIONES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501792006',
			'finicio' => '01-06-2018',
			'ftermino' => '30-06-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501751932',
			'finicio' => '01-01-2018',
			'ftermino' => '31-12-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016090',
			'finicio' => '01-01-2018',
			'ftermino' => '31-12-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SIEMENS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016483',
			'finicio' => '01-07-2018',
			'ftermino' => '30-06-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SITRANS SERVICIOS INTEGRADOS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501589000',
			'finicio' => '01-02-2016',
			'ftermino' => '31-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SKF')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014980',
			'finicio' => '25-09-2017',
			'ftermino' => '25-09-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SOC. COMERCIAL ALVAREZ Y ALVAREZ LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501658010',
			'finicio' => '14-09-2016',
			'ftermino' => '30-11-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600012438',
			'finicio' => '01-12-2013',
			'ftermino' => '30-11-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TANDEM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013415',
			'finicio' => '01-01-2015',
			'ftermino' => '31-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TESRA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501678504',
			'finicio' => '01-02-2017',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TORQUE INGENIERIA SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501713545',
			'finicio' => '05-06-2017',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TYCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501594523',
			'finicio' => '11-01-2016',
			'ftermino' => '10-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015786',
			'finicio' => '01-11-2017',
			'ftermino' => '31-10-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015541',
			'finicio' => '01-06-2017',
			'ftermino' => '31-05-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$ubicacionID = Ubicacion::where('nombre', 'División Ministro Hales')->value('id');
		$empresaID = Empresa::where('nombre', 'AGUAS Y RILES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501611679',
			'finicio' => '31-03-2016',
			'ftermino' => '31-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'AGUASIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4516785999',
			'finicio' => '01-06-2017',
			'ftermino' => '01-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ANMAR')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501587537',
			'finicio' => '01-12-2015',
			'ftermino' => '01-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ARAMARK')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011494',
			'finicio' => '01-05-2013',
			'ftermino' => '30-04-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501731915',
			'finicio' => '23-03-2017',
			'ftermino' => '23-03-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4610015659',
			'finicio' => '03-07-2017',
			'ftermino' => '01-08-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4610001565',
			'finicio' => '03-07-2017',
			'ftermino' => '01-08-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'AUSTIN INGENIEROS CHILE LTDA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015706',
			'finicio' => '17-07-2017',
			'ftermino' => '17-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014574',
			'finicio' => '16-02-2016',
			'ftermino' => '16-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501595991',
			'finicio' => '06-10-2017',
			'ftermino' => '05-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'C & G')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501587280',
			'finicio' => '01-01-2016',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501782149',
			'finicio' => '05-06-2018',
			'ftermino' => '05-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'CESMEC S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4500168954',
			'finicio' => '15-02-2017',
			'ftermino' => '14-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501689544',
			'finicio' => '15-02-2017',
			'ftermino' => '14-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501783765',
			'finicio' => '01-05-2018',
			'ftermino' => '01-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'COLINA VERDE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015819',
			'finicio' => '15-12-2017',
			'ftermino' => '15-12-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'COPEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501533896',
			'finicio' => '01-05-2015',
			'ftermino' => '30-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'COSTELLA PROYECTOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501792245',
			'finicio' => '16-07-2018',
			'ftermino' => '16-07-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016442',
			'finicio' => '01-06-2018',
			'ftermino' => '30-05-2023',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'DERK INGENIERIA Y GEOLOGIA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501781459',
			'finicio' => '15-05-2018',
			'ftermino' => '15-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'DT INDUSTRIAL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400193544',
			'finicio' => '16-07-2018',
			'ftermino' => '14-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'DYNO NOBEL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016434',
			'finicio' => '01-06-2018',
			'ftermino' => '31-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ECOTERMICA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501696132',
			'finicio' => '23-03-2017',
			'ftermino' => '23-03-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009777',
			'finicio' => '01-06-2015',
			'ftermino' => '31-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'EXPLORACIONES MINERAS ANDINAS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014480',
			'finicio' => '01-08-2017',
			'ftermino' => '13-11-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'EXSA CHILE SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016347',
			'finicio' => '05-04-2018',
			'ftermino' => '31-10-2023',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'FINNING CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009553',
			'finicio' => '09-02-2011',
			'ftermino' => '09-02-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600009584',
			'finicio' => '28-09-2011',
			'ftermino' => '28-09-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'FOURTHANE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016276',
			'finicio' => '01-04-2018',
			'ftermino' => '31-03-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'GEO ATACAMA CONSULTORES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400184162',
			'finicio' => '24-01-2018',
			'ftermino' => '24-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '372017',
			'finicio' => '01-12-2017',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'GROUNDPROBE SOUTH AMERICA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501690352',
			'finicio' => '15-01-2017',
			'ftermino' => '15-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'HIDROMEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501359397',
			'finicio' => '01-05-2013',
			'ftermino' => '01-05-2022',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'HIGH SERVICE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501713189',
			'finicio' => '16-06-2017',
			'ftermino' => '19-06-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501494083',
			'finicio' => '17-11-2014',
			'ftermino' => '21-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ICV S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501770550',
			'finicio' => '01-04-2018',
			'ftermino' => '01-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'ISS SERVICIOS INTEGRALES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501757801',
			'finicio' => '05-01-2018',
			'ftermino' => '05-01-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'JIGSAW TECHNOLOGIES LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010017',
			'finicio' => '01-08-2016',
			'ftermino' => '31-01-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'JKL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501796595',
			'finicio' => '17-07-2018',
			'ftermino' => '17-07-2022',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'JOINT VENTURE AAGG')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015685',
			'finicio' => '01-08-2017',
			'ftermino' => '30-07-2022',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600001023',
			'finicio' => '04-06-2011',
			'ftermino' => '28-02-2022',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010180',
			'finicio' => '05-05-2011',
			'ftermino' => '05-05-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'MECANICA DE ROCAS LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400177742',
			'finicio' => '21-03-2018',
			'ftermino' => '16-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4400185661',
			'finicio' => '12-03-2018',
			'ftermino' => '15-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'METRIKA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501745909',
			'finicio' => '21-11-2017',
			'ftermino' => '20-11-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'MONTAJES DEL PACIFICO S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501632582',
			'finicio' => '20-07-2016',
			'ftermino' => '31-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'MSMIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016036',
			'finicio' => '01-01-2018',
			'ftermino' => '31-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'OHL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501765588',
			'finicio' => '01-04-2018',
			'ftermino' => '01-04-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'OUTOTEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501402493',
			'finicio' => '09-10-2013',
			'ftermino' => '28-02-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'PSINET CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016091',
			'finicio' => '01-01-2018',
			'ftermino' => '31-12-2022',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'REVESOL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501771792',
			'finicio' => '09-04-2018',
			'ftermino' => '15-02-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'RFP LOGISTICA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501758283',
			'finicio' => '08-01-2018',
			'ftermino' => '31-01-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SERVINA SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501769171',
			'finicio' => '12-02-2018',
			'ftermino' => '12-02-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SGS MINERALS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501679609',
			'finicio' => '01-01-2017',
			'ftermino' => '31-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SGS SIGA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4400189373',
			'finicio' => '01-04-2018',
			'ftermino' => '30-03-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501577935',
			'finicio' => '06-10-2015',
			'ftermino' => '05-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4502577935',
			'finicio' => '01-10-2015',
			'ftermino' => '30-09-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SOLETANCHE BACHY')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015776',
			'finicio' => '23-10-2017',
			'ftermino' => '30-11-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SOTRASER')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016437',
			'finicio' => '03-07-2018',
			'ftermino' => '03-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'STEEL INGENIERIA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600013185',
			'finicio' => '01-07-2014',
			'ftermino' => '30-06-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SUATRANS')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501404054',
			'finicio' => '28-10-2013',
			'ftermino' => '27-10-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'SUEZ CHILE')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015175',
			'finicio' => '31-12-2016',
			'ftermino' => '31-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'VAI')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501768343',
			'finicio' => '24-01-2018',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'VALIDAR TRAIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '6873366',
			'finicio' => '17-05-2017',
			'ftermino' => '30-11-2018',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501526528',
			'finicio' => '01-03-2015',
			'ftermino' => '02-03-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		
		$empresaID = Empresa::where('nombre', 'VOLCAN NEVADO LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015167',
			'finicio' => '10-01-2017',
			'ftermino' => '10-01-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$ubicacionID = Ubicacion::where('nombre', 'División Radomiro Tomic')->value('id');
		$empresaID = Empresa::where('nombre', 'AGROAMANCAY S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501752911',
			'finicio' => '13-12-2017',
			'ftermino' => '13-12-2020',
		]);

		$empresaID = Empresa::where('nombre', 'APPLUS NORCONTROL')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501743400',
			'finicio' => '01-11-2017',
			'ftermino' => '01-11-2019',
		]);

		$empresaID = Empresa::where('nombre', 'ATLAS COPCO')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016079',
			'finicio' => '03-07-2017',
			'ftermino' => '03-07-2020',
		]);

		$empresaID = Empresa::where('nombre', 'BROAD SPECTRUM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014190',
			'finicio' => '05-08-2015',
			'ftermino' => '03-08-2019',
		]);
		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501669175',
			'finicio' => '03-08-2015',
			'ftermino' => '03-08-2019',
		]);

		$empresaID = Empresa::where('nombre', 'BUILDTEK S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016439',
			'finicio' => '01-06-2018',
			'ftermino' => '01-06-2022',
		]);

		$empresaID = Empresa::where('nombre', 'BUREAU VERITAS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014979',
			'finicio' => '01-09-2016',
			'ftermino' => '31-08-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'CSI LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501533894',
			'finicio' => '01-05-2015',
			'ftermino' => '30-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600016451',
			'finicio' => '01-07-2018',
			'ftermino' => '30-06-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DETROIT CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600011554',
			'finicio' => '01-11-2012',
			'ftermino' => '01-11-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'DISTRIBUIDORA CUMMINS CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600006518',
			'finicio' => '21-08-2008',
			'ftermino' => '21-08-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EMIN')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501783252',
			'finicio' => '01-05-2018',
			'ftermino' => '08-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ENAEX SERVICIOS S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009667',
			'finicio' => '01-06-2010',
			'ftermino' => '31-10-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'EPIROC CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600010484',
			'finicio' => '01-01-2010',
			'ftermino' => '01-01-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'F.C.A. TRANSPORTES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501758749',
			'finicio' => '21-12-2017',
			'ftermino' => '31-12-2018',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'FAM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501532818',
			'finicio' => '01-08-2018',
			'ftermino' => '28-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'GEOPERACIONES')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501746623',
			'finicio' => '06-03-2018',
			'ftermino' => '06-03-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ICL CATODOS LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501771158',
			'finicio' => '14-03-2018',
			'ftermino' => '13-03-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'ICS VALLE DE LA LUNA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501505780',
			'finicio' => '01-01-2015',
			'ftermino' => '31-12-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'INDUSTRIAL SUPPORT COMPANY LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014492',
			'finicio' => '01-02-2017',
			'ftermino' => '01-02-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JM')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014575',
			'finicio' => '01-06-2016',
			'ftermino' => '31-05-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'JOY GLOBAL CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600009065',
			'finicio' => '09-08-2010',
			'ftermino' => '09-08-2021',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600010233',
			'finicio' => '01-06-2011',
			'ftermino' => '01-02-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'KOMATSU CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4500629318',
			'finicio' => '31-10-2007',
			'ftermino' => '31-10-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'NEW TECH COPPER')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501561404',
			'finicio' => '30-11-2015',
			'ftermino' => '30-09-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'POWER TRAIN TECHNOLOGIES CHILE S A')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016490',
			'finicio' => '01-08-2018',
			'ftermino' => '31-07-2023',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PSINET CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501750095',
			'finicio' => '08-01-2018',
			'ftermino' => '08-04-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'PUCARA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501649724',
			'finicio' => '12-08-2016',
			'ftermino' => '12-08-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4501781659',
			'finicio' => '01-06-2018',
			'ftermino' => '31-05-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'R&O LTDA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501707785',
			'finicio' => '01-06-2017',
			'ftermino' => '31-05-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SALMAG')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015884',
			'finicio' => '01-10-2017',
			'ftermino' => '01-05-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SANDVIK CHILE S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014784',
			'finicio' => '01-06-2016',
			'ftermino' => '01-07-2019',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SCHWAGER SERVICES S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014164',
			'finicio' => '31-07-2015',
			'ftermino' => '31-07-2020',
			'ubicacion_id' => $ubicacionID,
		]);
		Contrato::create([
			'empresa_id' => $empresaID, 
			'numero' => '4600014981',
			'finicio' => '16-09-2016',
			'ftermino' => '15-09-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SGS CHILE LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600014573',
			'finicio' => '01-04-2016',
			'ftermino' => '01-04-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SOCOAL LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501715388',
			'finicio' => '01-08-2017',
			'ftermino' => '31-07-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'SOMACOR')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4501632583',
			'finicio' => '16-06-2016',
			'ftermino' => '15-06-2021',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TECNOLOGIAS COBRA LTDA.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '1400007032',
			'finicio' => '01-06-2018',
			'ftermino' => '31-05-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TORQUE INGENIERIA SPA')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015802',
			'finicio' => '01-11-2018',
			'ftermino' => '01-11-2020',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'TRANYMEC')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600015148',
			'finicio' => '15-02-2017',
			'ftermino' => '14-02-2022',
			'ubicacion_id' => $ubicacionID,
		]);

		$empresaID = Empresa::where('nombre', 'VECCHIOLA S.A.')->value('id');

		Contrato::create([
			'empresa_id' => $empresaID,
			'numero' => '4600016195',
			'finicio' => '15-02-2018',
			'ftermino' => '14-02-2019',
			'ubicacion_id' => $ubicacionID,
		]);
    }
}