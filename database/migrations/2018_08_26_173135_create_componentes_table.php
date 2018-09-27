<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Componente', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('caracteristica');
			$table->text('descripcion')->nullable();
			$table->string('nSerie');
			$table->unsignedInteger('Activo_id');
			$table->unsignedInteger('TipoComponente_id');
			$table->unsignedInteger('CategoriaComponente_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Componente');
	}
}
