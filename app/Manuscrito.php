<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscrito extends Model
{
    protected $fillable = [
        'titulo', 
        'criadores', 
        'data',
        'local',
        'idioma',
        'numero',
        'tipo',
        'pic',
    ];
}
