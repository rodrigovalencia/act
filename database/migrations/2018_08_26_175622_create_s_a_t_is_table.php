<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSATIsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SATI', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('rut');
			$table->integer('numSAP')->nullable();
			$table->string('nombre');
			$table->string('nombre2')->nullable();
			$table->string('apPaterno');
			$table->string('apMaterno');
			$table->string('userID');
			$table->date('fTerminoContrato');
			$table->string('cecoGrafo');
			$table->unsignedInteger('TipoContrato_id');
			$table->unsignedInteger('Contrato_id');
			$table->unsignedInteger('Estado_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('SATI');
	}
}
