<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloConsumiblesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ModeloConsumible', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('documento');
			$table->unsignedInteger('Fabricante_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ModeloConsumible');
	}
}
