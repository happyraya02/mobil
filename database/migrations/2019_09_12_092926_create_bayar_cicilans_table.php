<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarCicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_cicilan');
            $table->string('kode_kredit');
            $table->string('tgl_cicilan');
            $table->string('jumlah_cicilan');
            $table->string('cicilan_ke');
            $table->string('cicilan_sisa_ke');
            $table->string('cicilan_sisa_harga');

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
        Schema::dropIfExists('bayar_cicilans');
    }
}
