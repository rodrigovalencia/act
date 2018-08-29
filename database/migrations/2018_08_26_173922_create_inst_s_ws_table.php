<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstSWsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('InstSW', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Licencia_id');
			$table->unsignedInteger('SW_id');
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
		Schema::dropIfExists('InstSW');
	}
}
