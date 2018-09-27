<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepetidorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Repetidor', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Modelo_id');
			$table->unsignedInteger('Area_id');
			$table->unsignedInteger('Contrato_id');
			$table->string('ip');
			$table->string('serial');
			$table->double('pot');
			$table->double('potMin');
			$table->double('potMax');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Repetidor');
	}
}
