<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoEspecialistasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('GrupoEspecialista', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->unsignedInteger('GrupoUsuario_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('GrupoEspecialista');
	}
}
