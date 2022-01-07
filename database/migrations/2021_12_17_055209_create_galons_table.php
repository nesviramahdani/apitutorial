<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_galon');
            $table->string('alamat_galon');
            $table->string('bukaTutup');
            $table->string('telepon');
            $table->integer('harga');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('galons');
    }
}
