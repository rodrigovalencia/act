<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpresorasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Impresora', function (Blueprint $table) {
			$table->increments('id');
			$table->string('mac');
			$table->string('ip')->nullable();
			$table->unsignedInteger('Modelo_id');
			$table->unsignedInteger('Area_id');
			$table->unsignedInteger('Contrato_id');
			$table->unsignedInteger('Responsable_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Impresora');
	}
}
