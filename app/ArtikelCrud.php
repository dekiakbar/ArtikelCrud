<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelCrud extends Model
{
    protected $fillale = ['judul', 'kutipan', 'slug', 'kategori_id', 'isi', 'meta_keyword', 'meta_deskripsi', 'foto'];

    protected $table = 'ArtikelCrud';
}






