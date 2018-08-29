<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantencionActivoComponentesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Mantencion_Activo_Componente', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Mantencion_id');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('Componente_id');
			$table->unsignedInteger('Resultado_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Mantencion_Activo_Componente');
	}
}
