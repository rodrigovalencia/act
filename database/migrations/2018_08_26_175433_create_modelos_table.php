<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Modelo', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('documento')->nullable();
			$table->unsignedInteger('Fabricante_id');
			$table->unsignedInteger('Procedimiento_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Modelo');
	}
}
