<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'nome', 'nome', 'data_nascimento', 'sexo', 'email' 
    ];
}
