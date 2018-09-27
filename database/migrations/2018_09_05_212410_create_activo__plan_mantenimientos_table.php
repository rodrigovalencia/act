<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivoPlanMantenimientosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Activo_PlanMantenimiento', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fUltimo');
			$table->time('periodo');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('PlanMantenimiento_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Activo_PlanMantenimiento');
	}
}
