<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunoTurma;
use App\Aluno;
use App\Turma;

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

    public function listaAluno($turmaID){
        $registros = Aluno::all();
        return view('admin.turmas.listaAluno', compact('registros', 'turmaID'));
        
    }

    public function salvaAluno($id,$turmaID){
        $dados = new AlunoTurma();
        $dados->alunos_id = $id;
        $dados->turmas_id = $turmaID;
        $dados->save();
        dd($dados);
    }
}
