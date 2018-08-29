<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Licencia', function (Blueprint $table) {
			$table->increments('id');
			$table->string('serie');
			$table->integer('cantidad');
			$table->string('documento');
			$table->unsignedInteger('TipoLicencia_id');
			$table->unsignedInteger('SW_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Licencia');
	}
}
