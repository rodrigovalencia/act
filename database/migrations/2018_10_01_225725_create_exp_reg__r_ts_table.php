<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpRegRTsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ExpReg_RT', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Sistema_id');
			$table->string('nSerie');
			$table->string('flashPort')->nullable();
			$table->string('idSistema');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ExpReg_RT');
	}
}
