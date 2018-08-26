<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilZonaCanalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Perfil_Zona_Canal', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Perfil_id');
			$table->unsignedInteger('Zona_id');
			$table->unsignedInteger('Canal_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Perfil_Zona_Canal');
	}
}
