<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadioComercialsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RadioComercial', function (Blueprint $table) {
			$table->increments('id');
			$table->string('serie');
			$table->unsignedInteger('Modelo_id');
			$table->unsignedInteger('Ubicacion_id');
			$table->unsignedInteger('Responsable_id');
			$table->unsignedInteger('Equipo_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('RadioComercial');
	}
}
