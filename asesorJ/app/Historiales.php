<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historiales extends Model
{
    protected $fillable = ['usuario', 'sentencia'];
}
