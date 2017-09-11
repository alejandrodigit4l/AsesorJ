<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $fillable = ['usuario','email','push_token','categoria','cuerpo','pregunta'];
}
