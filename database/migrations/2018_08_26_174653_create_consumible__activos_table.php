<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumibleActivosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Consumible_Activo', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('cantidad');
			$table->unsignedInteger('Consumible_id');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('Ticket_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Consumible_Activo');
	}
}
