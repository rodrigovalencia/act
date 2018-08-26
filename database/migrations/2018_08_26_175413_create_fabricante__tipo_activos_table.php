<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFabricanteTipoActivosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Fabricante_TipoActivo', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Fabricante_id');
			$table->unsignedInteger('TipoActivo_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Fabricante_TipoActivo');
	}
}
