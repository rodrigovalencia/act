<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivoLogsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ActivoLog', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('SubActividad_id');
			$table->unsignedInteger('Usuario_id');
			$table->unsignedInteger('Ubicacion_id');
			$table->datetime('fecha');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ActivoLog');
	}
}
