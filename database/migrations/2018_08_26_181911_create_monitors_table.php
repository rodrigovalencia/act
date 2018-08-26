<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Monitor', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Modelo_id');
			$table->unsignedInteger('Ubicacion_id');
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
		Schema::dropIfExists('Monitor');
	}
}
