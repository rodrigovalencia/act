<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateURadiosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('URadio', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Ubicacion_id');
			$table->integer('ubicable_id');
			$table->string('ubicable_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('URadio');
	}
}
