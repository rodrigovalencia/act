<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Capacitacion', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('descripcion');
			$table->dateTime('fecha');
			$table->time('duracion');
			$table->unsignedInteger('Persona_id');
			$table->unsignedInteger('Usuario_id');
			$table->unsignedInteger('Categoria_id');
			$table->string('documento')->nullable();
			$table->string('documento2')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Capacitacion');
	}
}
