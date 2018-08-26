<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCablesRadiantesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CableRadiante', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Modelo_id');
			$table->unsignedInteger('Area_id');
			$table->unsignedInteger('Contrato_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('CableRadiante');
	}
}
