<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Canal', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('AreaCanal_id');
			$table->integer('numero');
			$table->string('nombre');
			$table->string('abreviacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Canal');
	}
}
