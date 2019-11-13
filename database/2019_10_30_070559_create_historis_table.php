<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nominal');
            $table->enum('keterangan', ['pengeluaran', 'pemasukan']);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->integer('katspec_id')->unsigned()->nullable();
            $table->foreign('katspec_id')->references('id')->on('katspecs');
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
        Schema::dropIfExists('historis');
    }
}
