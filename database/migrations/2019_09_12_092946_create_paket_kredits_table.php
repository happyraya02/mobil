<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_paket');
            $table->integer('harga_paket');
            $table->integer('uang_muka');
            $table->integer('jumlah_cicilan');
            $table->integer('bunga');
            $table->integer('nilai_cicilan');
            // $table->unsignedbigInteger('kredits_id');

            // $table->foreign('kredits_id')->references('id')->on('kredits')->onDelete('cascade');
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
        Schema::dropIfExists('paket_kredits');
    }
}
