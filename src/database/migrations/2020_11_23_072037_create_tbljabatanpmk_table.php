<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbljabatanpmkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbljabatanpmk', function (Blueprint $table) {
            $table->id();
            $table->string("Ketua PMk");
            $table->string("Wakil Ketua");
            $table->string("Sekretaris");
            $table->string("Bendahara");
            $table->string("Kordinator Acara");
            $table->string("Anggota Acara");
            $table->string("Kordinator Multimedia");
            $table->string("Anggota Multimedia");
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
        Schema::dropIfExists('tbljabatanpmk');
    }
}
