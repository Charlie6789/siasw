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
        Schema::create('directivos', function (Blueprint $table) {
            $table->bigInteger("direc_id");
            $table->string("rol", 2);
            $table->string("tdoc_dir", 2);
            $table->string("nomb_dir", 30);
            $table->string("ape_dir", 30);
            $table->bigInteger("tel");
            $table->string("correo_dir", 30);
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
        Schema::dropIfExists('directivos');
    }
};
