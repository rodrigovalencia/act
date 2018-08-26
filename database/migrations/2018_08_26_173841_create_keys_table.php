<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeysTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Key', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('TipoKey_id');
			$table->unsignedInteger('Licencia_id');
			$table->string('serial');
			$table->integer('cantidad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Key');
	}
}
