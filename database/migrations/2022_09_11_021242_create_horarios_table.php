<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id("horario_id");
            $table->bigInteger("cod_mat_1ra");
            $table->bigInteger("cod_mat_2da");
            $table->bigInteger("cod_mat_3ra");
            $table->bigInteger("cod_mat_4ta");
            $table->bigInteger("cod_mat_5ta");
            $table->bigInteger("cod_mat_6ta");
            $table->int("anio_lect");
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
        Schema::dropIfExists('horarios');
    }
};
