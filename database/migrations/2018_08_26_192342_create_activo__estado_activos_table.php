<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivoEstadoActivosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Activo_EstadoActivo', function (Blueprint $table) {
			$table->increments('id');
			$table->dateTime('fecha');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('EstadoActivo_id');
			$table->unsignedInteger('Servicio_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Activo_EstadoActivo');
	}
}
