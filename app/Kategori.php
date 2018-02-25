<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug'];
    protected $table = 'kategori';

    public function tag()
    {
    	$this->belongsTo('App\Tag','kategori_id');
    }
}
