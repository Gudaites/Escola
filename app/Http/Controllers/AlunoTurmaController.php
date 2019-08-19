<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunoTurma;
use App\Aluno;

class AlunoTurmaController extends Controller
{
    public function index($id){
        $req = AlunoTurma::where('turmas_id', $id)->get();
        $turmaID = $id;
        //dd($registros[0]->alunos_id);
        $registros = [];
        for ($i=0; $i < count($req); $i++) { 
            $registros[$i] = Aluno::where('id','=', $req[$i]->alunos_id)->first();

        } 
        //dd($registros);
        return view('admin.turmas.alunos', compact('registros','turmaID'));
     }

    public function deletar($id){
        $req = AlunoTurma::where('turma_id', $id)->get();
        $registros = [];
        for ($i=0; $i < count($req); $i++) { 
            $registros[$i] = Aluno::where('id','=', $req[$i]->alunos_id)->first();
        
        } 
    }

    public function adicionarAluno($turmaID){
        return view('site.turmas.adicionaraluno', $turmaID, compact('turmaID'));
        
    }
}
