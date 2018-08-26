<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Area', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->double('lat')->nulable();
			$table->double('lon')->nulable();
			$table->unsignedInteger('Ubicacion_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Area');
	}
}
