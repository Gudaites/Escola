<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'descricao', 'qtd_vagas', 'nome_professor'
    ];
}
