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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigInteger("est_id");
            $table->string("t_doc", 2);
            $table->string("pri_nom", 15);
            $table->string("seg_nom", 15);
            $table->string("pri_ape", 15);
            $table->string("seg_ape", 15);
            $table->date("fecha_nac");
            $table->bigInteger("tel");
            $table->string("cod_eps", 6);
            $table->bigInteger("doc_acud");
            $table->string("dir_est", 30);
            $table->integer("cod_curso");
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
        Schema::dropIfExists('estudiantes');
    }
};
