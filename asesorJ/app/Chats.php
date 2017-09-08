<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $fillable = ['receptor','emisor','titulo','message','estado','send_email'];
}
