<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCCTVsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CCTV', function (Blueprint $table) {
			$table->increments('id');
			$table->string('mac')->nullable();
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
		Schema::dropIfExists('CCTV');
	}
}
