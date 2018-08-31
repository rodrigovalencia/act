<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ticket', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fInicio');
			$table->date('fCompromiso');
			$table->date('fTermino')->nullable();
			$table->unsignedInteger('CategoriaTicket_id');
			$table->unsignedInteger('Solicita_id');
			$table->unsignedInteger('Retira_id')->nullable();
			$table->unsignedInteger('Ubicacion_id');
			$table->text('observaciones');
			$table->text('observaciones2')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Ticket');
	}
}
