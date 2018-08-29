<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Contacto', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('apPaterno');
			$table->string('apMaterno')->nullable();
			$table->string('fono')->nullable();
			$table->dateTime('fecha');
			$table->string('documento')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Contacto');
	}
}
