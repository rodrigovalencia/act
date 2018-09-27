<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfEquipoActivosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ConfEquipo_Activo', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('ConfEquipo_id');
			$table->unsignedInteger('Activo_id');
			$table->string('detalle');
			$table->string('observacion')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ConfEquipo_Activo');
	}
}
