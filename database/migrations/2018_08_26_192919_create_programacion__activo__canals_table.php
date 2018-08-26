<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacionActivoCanalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Programacion_Activo_Canal', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Programacion_Activo_id');
			$table->unsignedInteger('Canal_id');
			$table->unsignedInteger('Zona_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Programacion_Activo_Canal');
	}
}
