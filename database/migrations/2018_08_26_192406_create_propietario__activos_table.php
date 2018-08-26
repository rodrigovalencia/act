<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietarioActivosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Propietario_Activo', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Propietario_id');
			$table->unsignedInteger('Activo_id');
			$table->string('documento');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Propietario_Activo');
	}
}
