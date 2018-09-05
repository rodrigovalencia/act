<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Contrato', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('numero');
			$table->date('fInicio');
			$table->date('fTermino');
			$table->unsignedInteger('Empresa_id');
			$table->unsignedInteger('Ubicacion_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Contrato');
	}
}
