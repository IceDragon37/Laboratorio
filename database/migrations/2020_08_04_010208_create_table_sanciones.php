<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSanciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sanciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rut');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('descripcion');
            $table->string('razon');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_sanciones');
    }
}
