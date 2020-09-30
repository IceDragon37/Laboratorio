<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SistemaCaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema_caja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha');
            $table->string('ayudante');
            $table->string('diezmil');
            $table->string('cincomil');
            $table->string('dosmil');
            $table->string('mil');
            $table->string('quinientos');
            $table->string('cien');
            $table->string('cincuenta');
            $table->string('diez');
            $table->string('totalingreso');
            $table->string('retiro');
            $table->string('totalmonto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistema_caja');
    }
}
