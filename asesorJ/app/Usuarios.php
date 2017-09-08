<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombres','email','clave','password1','telefono','celular','push_token','categoria','tipo_usuario','terminos','img'];
}
