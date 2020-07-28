<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioLabCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_lab_c', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dia');
            $table->string('clave');
            $table->text('clase');
            $table->string('profesor');
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
        Schema::dropIfExists('horario_lab_c');
    }
}
