<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionPersonasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Capacitacion_Persona', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Capacitacion_id');
			$table->unsignedInteger('Persona_id');
			$table->boolean('asiste');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Capacitacion_Persona');
	}
}
