<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioUsuariosTable extends Migration
	{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Servicio_Usuario', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Servicio_id');
			$table->unsignedInteger('Usuario_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Servicio_Usuario');
	}
}
