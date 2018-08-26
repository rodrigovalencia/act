<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Usuario', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('rut');
			$table->string('pass');
			$table->string('nombre');
			$table->string('apPaterno');
			$table->string('apMaterno');
			$table->string('numContacto');
			$table->string('mail');
			$table->boolean('usuarioActivo');
			$table->unsignedInteger('Rol_id');
			$table->unsignedInteger('Ubicacion_id');
			$table->unsignedInteger('TipoUsuario_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Usuario');
	}
}
