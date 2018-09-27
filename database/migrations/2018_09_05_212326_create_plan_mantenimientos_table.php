<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanMantenimientosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PlanMantenimiento', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fCreacion');
			$table->unsignedInteger('TipoActivo_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('PlanMantenimiento');
	}
}
