<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionActivoComponentesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Reparacion_Activo_Componente', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Reparacion_id');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('Componente_id');
			$table->unsignedInteger('Resultado_id');
			$table->string('comentario');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Reparacion_Activo_Componente');
	}
}
