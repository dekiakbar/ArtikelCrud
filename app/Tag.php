<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug', 'kategori_id'];
    protected $table 	= 'tag';

    public function kategori(){
    	return $this->hasMany('App\Kategori','id');
    }

    public function artikel()
    {
    	return $this->hasMany('App\Artikel','tag_id');
    }
}
