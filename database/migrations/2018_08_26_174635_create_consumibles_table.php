<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumiblesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Consumible', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->integer('stock')->default(0);
			$table->unsignedInteger('TipoConsumible_id');
			$table->unsignedInteger('ModeloConsumible_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Consumible');
	}
}
