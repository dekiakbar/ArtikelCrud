<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillale = ['judul', 'kutipan', 'slug', 'kategori_id', 'isi', 'meta_keyword', 'meta_deskripsi', 'foto', 'status'];

    protected $table = 'ArtikelCrud';
}
