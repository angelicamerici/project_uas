<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historikats', function (Blueprint $table) {
            $table->integer('katid')->unsigned();
            $table->foreign('katid')->references('id')->on('kategoris');
            $table->integer('katspecid')->unsigned();
            $table->foreign('katspecid')->references('id')->on('katspecs');
            $table->integer('hisid')->unsigned();
            $table->foreign('hisid')->references('id')->on('historis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historikats');
    }
}
