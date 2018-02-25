<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtikelCrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArtikelCrud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('kutipan');
            $table->string('slug');
            $table->integer('kategori_id')->unique();
            $table->string('isi');
            $table->string('meta_keyword');
            $table->string('meta_deskripsi');
            $table->string('foto');
            $table->string('status');
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
        Schema::dropIfExists('ArtikelCrud');
    }
}
