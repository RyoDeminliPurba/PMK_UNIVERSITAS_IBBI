<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkegiatanpmkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkegiatanpmk', function (Blueprint $table) {
            $table->id();
            $table->string("Pemuridan");
            $table->string("Doa Puasa");
            $table->string("Ibadah Raya PMK");
            $table->string("Reat-Reat PMK");
            $table->string("Ibadah Paskah");
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
        Schema::dropIfExists('tblkegiatanpmk');
    }
}
