<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $fillable = ['usuario','email','push_token','titulo','cuerpo','categoria','estado','cantidad'];
}
