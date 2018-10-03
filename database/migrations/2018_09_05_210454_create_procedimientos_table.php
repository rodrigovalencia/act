<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimientosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Procedimiento', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('descripcion');
			$table->string('documento');
			$table->unsignedInteger('TipoServicio_id');
			$table->unsignedInteger('Modelo_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Procedimiento');
	}
}
