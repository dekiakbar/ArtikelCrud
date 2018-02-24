<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug', 'kategori_id'];
    protected $table = 'tag';
}
