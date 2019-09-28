<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
