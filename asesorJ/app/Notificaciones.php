<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{



    protected $fillable = ['usuario','email','mensaje','medio'];
}
