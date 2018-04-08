<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{
    protected $fillable = array('sexo');

    protected $table = 'sexos';
}
