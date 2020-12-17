<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpengenalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpengenalan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodenama');
            $table->foreign('kodenama')->references('id')->on('tblnama');
            $table->string("pengenalan",100);
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
        Schema::dropIfExists('tblpengenalan');
    }
}
