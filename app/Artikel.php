<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
    	'judul', 'kutipan', 'slug', 'kategori_id','tag_id', 'isi', 'meta_keyword', 'meta_deskripsi', 'foto', 'status'
    ];

    protected $table = 'artikel';

    public function kategori(){
    	return $this->hasMany('App\Kategori','id');
    }
}
