<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarImpresion extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('agregar_impresion', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('fecha');
                $table->string('ayudante');
                $table->string('cantidadHojas');
                $table->string('profesor');
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
            Schema::dropIfExists('agegar_impresion');
        }
}
