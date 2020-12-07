<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbljabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbljabatan', function (Blueprint $table) {
            $table->id();

            $table->STRING("NAMA",100);
            $table->enum('JABATAN', ["KETUA", "WAKIL","BENDAHARA","SEKRETARIS","ACARA","KEROHANIAN","HUMAS","MULTIMEDIA"]);
            $table->unsignedBigInteger("idnama");
            $table->foreign('idnama')->references('id')->on('tblnama');
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
        Schema::dropIfExists('tbljabatan');
    }
}
