<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloRadioSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ModeloRadio_Sistema', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('ModeloRadio_id');
			$table->unsignedInteger('Sistema_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ModeloRadio_Sistema');
    }
}
