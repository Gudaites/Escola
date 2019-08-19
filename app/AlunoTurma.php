<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoTurma extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'alunos_id', 'turmas_id'
    ];
}
