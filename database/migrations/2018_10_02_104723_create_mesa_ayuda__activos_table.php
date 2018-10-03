<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesaAyudaActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MesaAyuda_Activo', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('MesaAyuda_id');
			$table->unsignedInteger('Activo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MesaAyuda_Activo');
    }
}
