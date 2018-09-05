<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualizacionPlansTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ActualizacionPlan', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fecha');
			$table->string('documento');
			$table->unsignedInteger('Usuario_id');
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
		Schema::dropIfExists('ActualizacionPlan');
	}
}
