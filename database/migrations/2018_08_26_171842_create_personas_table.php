<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Persona', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('rut');
			$table->string('nombre');
			$table->string('nombre2');
			$table->string('apPaterno');
			$table->string('apMaterno');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Persona');
	}
}
