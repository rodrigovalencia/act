<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivoEmpresasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Activo_Empresa', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('Empresa_id');
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
		Schema::dropIfExists('Activo_Empresa');
	}
}
