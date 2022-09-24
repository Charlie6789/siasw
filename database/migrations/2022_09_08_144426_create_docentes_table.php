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
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigInteger("doc_id");
            $table->string("tdoc_doc", 2);
            $table->string("nomb_doc", 30);
            $table->string("apell_doc", 30);
            $table->string("correo_doc", 20);
            $table->bigInteger("tel");
            $table->integer("cod_mat");
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
        Schema::dropIfExists('docentes');
    }
};
