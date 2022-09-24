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
        Schema::create('acudientes', function (Blueprint $table) {
            $table->bigInteger("acud_id");
            $table->string("t_doc", 2);
            $table->string("pri_nom", 15);
            $table->string("seg_nom", 15);
            $table->string("pri_ape", 15);
            $table->string("seg_ape", 15);
            $table->bigInteger("tel");
            $table->string("dir", 30);
            $table->string("correo", 30);
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
        Schema::dropIfExists('acudientes');
    }
};
