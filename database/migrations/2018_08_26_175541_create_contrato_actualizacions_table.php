<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoActualizacionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ContratoActualizacion', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fecha');
			$table->date('fNueva');
			$table->text('comentario')->nullable();
			$table->unsignedInteger('Contrato_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ContratoActualizacion');
	}
}
