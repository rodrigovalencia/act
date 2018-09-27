<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarroAmplificacionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CarroAmplificacion', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Area_id');
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
		Schema::dropIfExists('CarroAmplificacion');
	}
}
