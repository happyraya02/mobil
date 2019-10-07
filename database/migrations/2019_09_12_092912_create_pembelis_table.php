<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('KTP');
            $table->string('nama_pembeli');
            $table->string('alamat_pembeli');
            $table->integer('telp_pembeli');
            // $table->unsignedbigInteger('chases_id');
            // $table->unsignedbigInteger('kredits_id');

            // $table->foreign('chases_id')->references('id')->on('cashes')->onDelete('cascade');
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
        Schema::dropIfExists('pembelis');
    }
}
