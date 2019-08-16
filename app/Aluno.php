<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome', 'sexo', 'data_nascimento', 'cidade', 'bairro', 'rua','numero', 'complemento'
    ];
}
