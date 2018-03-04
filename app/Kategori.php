<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug'];
    protected $table    = 'kategori';

    public function tag()
    {
    	return $this->belongsTo('App\Tag','kategori_id');
    }

    public function artikel()
    {
    	return $this->hasMany('App\Artikel','id');
    }
}
