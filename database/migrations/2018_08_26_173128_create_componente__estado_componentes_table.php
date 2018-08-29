<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponenteEstadoComponentesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Componente_EstadoComponente', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Componente_id');
			$table->unsignedInteger('EstadoComponente_id');
			$table->datetime('fecha');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Componente_EstadoComponente');
	}
}
