<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelularsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Celular', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('numero');
			$table->integer('imei');
			$table->unsignedInteger('Modelo_id');
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
		Schema::dropIfExists('Celular');
	}
}
