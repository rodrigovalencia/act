<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaTicketsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CategoriaTicket', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('Categoria_id');
			$table->string('Categoria_type');
			$table->unsignedInteger('EstadoActivo_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('CategoriaTicket');
	}
}
