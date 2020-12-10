<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblnamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblnama', function (Blueprint $table) {
            $table->id();
            $table->string("Nama",50);
            $table->enum('JENIS KELAMIN', ["LAKI LAKI","PEREMPUAN"]);
            $table->date("tgllahir");
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
        Schema::dropIfExists('tblnama');
    }
}
