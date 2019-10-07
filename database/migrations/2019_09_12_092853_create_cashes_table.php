<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_cash');
            $table->string('KTP');
            $table->string('kode_mobil');
            //$table->unsignedbigInteger('mobils_id');
            $table->string('cash_tgl');
            $table->string('cash_bayar');

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
        Schema::dropIfExists('cashes');
    }
}
