<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFabricanteComponenteTipoComponentesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FabricanteComponente_TipoComponente', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('FabricanteComponente_id');
			$table->unsignedInteger('TipoComponente_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('FabricanteComponente_TipoComponente');
	}
}
