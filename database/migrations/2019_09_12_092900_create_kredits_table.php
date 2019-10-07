<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kredit');
            $table->string('KTP');
            $table->string('kode_paket');
            $table->string('kode_mobil');
            //$table->unsignedbigInteger('mobils_id');
            $table->string('tgl_kredit');

            //$table->foreign('mobils_id')->references('id')->on('mobils')->onDelete('cascade');
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
        Schema::dropIfExists('kredits');
    }
}
