<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Manuscrito extends Model
{
    protected $dates = [
        'data',
    ];



    protected $fillable = [
        'titulo', 
        'descricao', 
        'codigo',
        'data',
        'proprietario',
        'folhas',
        'tipo'
    ];

    public function getDataAttribute($value)
    {
        return $data = date('d/m/Y', strtotime($value));
    }

    public function setDataAttribute($value)
    {
        $d = str_replace("/", "-", $value);
        $data = date('Y-m-d', strtotime($d));
        $this->attributes['data'] = $data;
    }    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
