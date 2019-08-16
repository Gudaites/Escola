<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunoTurma;

class AlunoTurmaController extends Controller
{
    public function index(){
        $registros = AlunoTurma::all();
     return view('admin.turmas.alunos', compact('registros'));
     }
}
