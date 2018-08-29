<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfSWActivoComputosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ConfSW_ActivoComputo', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('ConfSW_id');
			$table->unsignedInteger('ActivoComputo_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ConfSW_ActivoComputo');
	}
}
