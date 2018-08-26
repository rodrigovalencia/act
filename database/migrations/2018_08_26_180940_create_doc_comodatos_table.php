<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocComodatosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DocComodato', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('RadioTrabajo_id');
			$table->unsignedInteger('Contrato_id');
			$table->string('documento');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('DocComodato');
	}
}
