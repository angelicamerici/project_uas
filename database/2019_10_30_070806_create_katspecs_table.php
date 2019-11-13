<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatspecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katspecs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katspecs');
    }
}
