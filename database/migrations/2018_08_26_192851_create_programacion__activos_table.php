<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacionActivosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Programacion_Activo', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Programacion_id');
			$table->unsignedInteger('TipoProgramacion_id');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('Perfil_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Programacion_Activo');
	}
}
