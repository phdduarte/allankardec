<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscrito extends Model
{
    protected $fillable = [
        'titulo', 
        'descricao', 
        'codigo',
        'data',
        'proprietario',
        'folhas',
        'tipo'
    ];
}
