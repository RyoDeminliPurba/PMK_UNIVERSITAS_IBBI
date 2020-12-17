<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkegiatan', function (Blueprint $table) {
            $table->id();
            $table->STRING("NAMA",100);
            $table->STRING("HARI",8);
            $table->STRING("PUKUL",5);
            $table->enum('Kegiatan', ["Pemuridan", "Doa Puasa","Ibadah Raya PMK","Reat-Reat PMK","ACARA","Ibadah Paskah"]);
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
        Schema::dropIfExists('tblkegiatan');
    }
}
