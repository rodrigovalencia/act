<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketEstadoTicketsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ticket_EstadoTicket', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('Ticket_id');
			$table->unsignedInteger('EstadoTicket_id');
			$table->dateTime('fecha');
			$table->unsignedInteger('Usuario_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Ticket_EstadoTicket');
	}
}
