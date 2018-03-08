<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $fillable = ['browser','os','user'];
    protected$table = 'tamu';
}
