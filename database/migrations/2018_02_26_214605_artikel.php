<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Artikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->text('kutipan');
            $table->string('slug')->unique();
            $table->integer('kategori_id')->unsigned();
            $table->string('tag_id');
            $table->text('isi');
            $table->text('meta_keyword');
            $table->text('meta_deskripsi');
            $table->string('foto');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('artikel',function (Blueprint $t){
            $t->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
