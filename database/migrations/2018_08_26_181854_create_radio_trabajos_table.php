<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadioTrabajosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RadioTrabajo', function (Blueprint $table) {
			$table->increments('id');
			$table->string('serie');
			$table->string('idSistema');
			$table->string('flashPort')->nullable();
			$table->string('centroCostos');
			$table->boolean('comodato');
			$table->unsignedInteger('ModeloRadio_id');
			$table->unsignedInteger('Area_id');
			$table->unsignedInteger('Contrato_id');
			$table->unsignedInteger('Mandante_id');
			$table->unsignedInteger('Tercero_id')->nullable();
			$table->unsignedInteger('URadio_id')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('RadioTrabajo');
	}
}
