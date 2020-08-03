<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioLabUXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_lab_u_x', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha');
            $table->string('dia');
            $table->string('clave');
            $table->string('alumno');
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
        Schema::dropIfExists('horario_lab_u_x');
    }
}
